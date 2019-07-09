<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $cats = Category::orderby('name', 'asc')->paginate(config('constants.options.paging'));
        return view('categories.list')->with('cats', $cats);
    }

    public function update($id)
    {
        //START VALIDATE FOR EXISTENCE OF ID
        $id_validate = ['id' => $id];
        $rules = ['id' => 'required|exists:categories,id,id,!0'];
        $validator = Validator::make($id_validate, $rules);

        if ($validator->fails()) {
            return abort(404);
        }
        //END VALIDATE *********************

        //SHOW THE UPDATE FORM *************
        $cat = Category::find($id);
        return view('categories.update')->with('cat', $cat);
    }

    public function store(Request $req)
    {
        //START VALIDATE *******************
        $message = [
            'required' => 'The :attribute is really really really important.',
            'same' => 'The :others must match.'
        ];
        if (isset($req->id)) { // the update case
            $update_rules = [
                'id' => 'required|exists:categories,id',
                'name' => 'required|unique:categories,name,' . $req->id
            ];
            $validator = Validator::make(Input::all(), $update_rules, $message);
        } else { //the create case
            $new_rules = [
                'name' => 'required|unique:categories,name'
            ];
            $validator = Validator::make(Input::all(), $new_rules, $message);
        }
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        //END VALIDATE *********************

        //DO TO STORE **********************
        $cat = new Category();
        $cat->name = $req->name;

        if (isset($req->id)) { //store in updated case
            $cat->exists = true;
            $cat->id = $req->id;
            $message = "Category updated.....!";
        } else { //store in created case
            $message = "Category created.....!";
        }
        $cat->save();

        return back()->with(['success' => $message, 'cat' => $cat]);
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return back()->with('success', "Category deleted!");
    }
}
