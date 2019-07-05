<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $cats = Category::get();
        return view('categories.list')->with('cats', $cats);
    }

    public function update($id)
    {
        $cat = Category::find($id);
        if (!$cat) {
            return back()->with('error', 'Could not find id ' . $id . '. Please try again!');
        }
        return view('categories.update')->with('cat', $cat);
    }

    public function store(Request $req)
    {
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
        $cat = Category::find($id);
        if (!$cat) {
            return back()->with('error', 'Could not find id ' . $id . '. Please try again!');
        }
        Category::destroy($id);
        return back()->with('success', "Category deleted!");
    }
}
