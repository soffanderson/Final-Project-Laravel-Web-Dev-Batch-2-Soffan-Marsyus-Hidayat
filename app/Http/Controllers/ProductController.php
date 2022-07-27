<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function formCreate()   
    {
        return view('form-create');
    }

    public function saveData(Request $request) {
        $product = new Product;
        $product->name =$request->name;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->price = $request->price;
        $product->save();

        return redirect('/');
    }

    public function deleteData($id) {
        $product = Product::find($id)->delete();

        return redirect('/');
    }

    public function formEdit($id) {
        $product = Product::find($id);
        return view('form-edit', compact('product'));
    }
    public function editData(Request $request, $id) {
        $product = Product::find($id);
        $product->name =$request->name;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->price = $request->price;
        $product->save();

        return redirect('/');
    }
}
