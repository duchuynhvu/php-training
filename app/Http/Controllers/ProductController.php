<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    protected $redirectTo = '/auth/login';

    function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::orderby('updated_at', 'desc')->paginate(intval(config('constants.options.paging')));
        return view('products.list')->with('products', $products);
    }

    public function create()
    {
        $cats = Category::get();
        return view('products.add')->with('cats', $cats);
    }

    public function update($id)
    {
        //START VALIDATE FOR EXISTENCE OF ID ****************
        $id_validate = ['id' => $id];
        $rules = ['id' => 'exists:products,id,id,!0'];

        $validator = Validator::make($id_validate, $rules);

        if ($validator->fails()) {
            return abort(404);
        }
        //END VALIDATE **************************************

        //SHOW FORM *****************************************
        $product = Product::find($id);
        $cats = Category::get();

        return view('products.update')->with(['product' => $product, 'cats' => $cats]);
    }

    public function store(Request $req)
    {
        //****************************************************
        //START VALIDATE *************************************
        //****************************************************
        //create custom validation messages ------------------
        $messages = array(
            'required' => 'The :attribute is really really really important.',
            'same' => 'The :others must match.'
        );
        if (isset($req->id)) { //the update case
            // create the validation rules for update form ----
            $update_rules = array(
                'id' => 'required|exists:products,id',
                'name' => 'required|unique:products,name,' . $req->id,
                'category' => 'required|exists:categories,id'
            );
            $validator = Validator::make(Input::all(), $update_rules, $messages);
        } else { //the create case
            // create the validation rules for create form ----
            $new_rules = array(
                'name' => 'required|unique:products,name',
                'category' => 'required|exists:categories,id'
            );
            $validator = Validator::make(Input::all(), $new_rules, $messages);
        }
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        //END VALIDATE*****************************************

        //DO TO STORE *****************************************
        $product = new Product();
        $product->name = $req->name;
        $product->quality = isset($req->quality) ? $req->quality : 0;
        $product->category_id = $req->category;
        $product->user_id = 1;

        if (isset($req->id)) { //store in updated case
            $product->exists = true;
            $product->id = $req->id;
            $message = "Product updated.....!";
        } else { //store in created case
            $message = "Product created.....!";
        }
        $product->save();

        return back()->with(['success' => $message, 'product' => $product]);
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return back()->with('success', "Product deleted!");
    }
}
