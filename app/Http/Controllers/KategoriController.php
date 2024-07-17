<?php

namespace App\Http\Controllers;

use Str;
use Alert;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        $title = 'Delete kategori!';
        $text = "Are you sure you want to delete?";
        confirmDelete($title, $text);
        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_category' => 'required|unique:kategoris,name_category',
        ]);

        $kategori = new Kategori();
        $kategori->name_category = $request->name_category;
        $kategori->slug = Str::slug($request->name_category);
        $kategori->desc = $request->desc;

        $kategori->save();
        Alert::success('Success', 'Data Saved Successfully')->autoClose(5000);
        return redirect()->route('kategori.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_category' => 'required|unique:kategoris,name_category',
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->name_category = $request->name_category;
        $kategori->slug = Str::slug($request->name_category);
        $kategori->desc = $request->desc;

        $kategori->save();
        Alert::success('Success', 'Data Edited Successfully')->autoClose(5000);
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori = kategori::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategori.index');
    }
}
