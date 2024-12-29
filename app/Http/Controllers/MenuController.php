<?php
// app/Http/Controllers/MenuController.php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('category')->get();
        return view('admin.menu.index', compact('menus'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.menu.create', compact('categories'));
    }

    // Menyimpan menu baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'menu_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'type' => 'required|in:Food,Drink',
        ]);

        Menu::create($validated);

        return redirect('/menu-edit')->with('message', 'Menu berhasil ditambahkan');
    }

    public function edit(Menu $menu)
    {
        $categories = Category::all(); 
        return view('admin.menu.edit', compact('menu', 'categories'));
    }

    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'menu_name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'type' => 'required|in:Food,Drink',
        ]);

        $menu->update($validated);

        return redirect()->route('menu.index')->with('message', 'Menu berhasil diperbarui');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu-edit')->with('message', 'Menu berhasil dihapus');
    }
}
