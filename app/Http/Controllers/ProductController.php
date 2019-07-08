<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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
        $product = Product::find($id);
        if (!$product) {
            return back()->with('error', 'Could not find id ' . $id . '. Please try again!');
        }
        $cats = Category::get();
        return view('products.update')->with(['product' => $product, 'cats' => $cats]);
    }

    public function store(Request $req)
    {
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
        $product = Product::find($id);
        if (!$product) {
            return back()->with('error', 'Could not find id ' . $id . '. Please try again!');
        }
        Product::destroy($id);
        return back()->with('success', "Product deleted!");
    }
}
