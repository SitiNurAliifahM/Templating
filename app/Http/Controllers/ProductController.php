<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Product;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        $title = 'Delete product!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $kategori = Kategori::all();
        return view('admin.product.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:products,name',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;

        // upload image
        if($request->hasFile('image')){
            $img = $request->file('image');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/product', $name);
            $product->image = $name;
        }

        $product->save();
        Alert::success('Success', 'Data Saved Successfully')->autoClose(5000);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.product.edit', compact('product', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:products,name',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->image = $request->image;
        $product->category_id = $request->category_id;

        // upload image
        if($request->hasFile('image')){
            $img = $request->file('image');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/product', $name);
            $product->image = $name;
        }

        $product->save();
        Alert::success('Success', 'Data Edited Successfully')->autoClose(5000);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
