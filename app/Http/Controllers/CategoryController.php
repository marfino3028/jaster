<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class CategoryController extends Controller
{
    public function create() {
        $showCategory = Kategori::pluck('nama_kategori', 'id');
        $selectedRole = 0;

        return view('backend.pages.add-category', compact('selectedRole', 'showCategory'));
    }

    public function index() {
        $listCategories = Kategori::with('parent')->get();

        return view('backend.pages.list-categories', compact('listCategories'));
    }

    public function store(Request $request) {
        $validateKategori = $request->validate([
            'nama_kategori' => 'required',
            'parent_id'     => 'nullable',
            'nilai'         => 'nullable',
        ]);

        $kategoriBaru = Kategori::create($validateKategori);

        return redirect('/tasks');
    }

    public function edit($id) {
        $showCategory = Kategori::pluck('nama_kategori', 'id');
        $selectedRole = 0;
        $edit         = Kategori::find($id);

        return view('backend.pages.edit-category', compact('edit', 'showCategory', 'selectedRole'));
    }

    public function update(Request $request, $id) {
        $validateKategori = $request->validate([
            'nama_kategori' => 'required',
            'parent_id'     => 'nullable',
            'nilai'         => 'nullable',
        ]);

        $kategoriBaru = Kategori::where('id', $id)->update($validateKategori);

        return redirect('/tasks');
    }

    public function delete($id) {
        $delete = Kategori::find($id)->delete();

        return redirect('/tasks');
    }
}
