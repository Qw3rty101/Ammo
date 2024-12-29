<?php
// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
        ]);

        $category = Category::create([
            'category_name' => $request->category_name,
        ]);

        return redirect()->back()->with('message', 'Kategori berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        // Hapus kategori
        $category->delete();

        return redirect()->route('kategory-edit')->with('message', 'Kategori berhasil dihapus');
    }
}
