<?php

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about-us', function () {
    $images = array_map(function ($path) {
        // Mengganti public_path dengan env('APP_URL')
        return env('APP_URL') . str_replace(public_path(), '', $path);
    }, glob(public_path('img/galeri/*.*')));

    return view('about-us', ['images' => $images]);
});


Route::get('/menu', function () {
    $drinks = Menu::where('type', 'Drink')->get();
    $foods = Menu::where('type', 'Food')->get();

    return view('menu', compact('drinks', 'foods'));
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/signin', [UserController::class, 'showSignInForm'])->name('signin');
Route::post('/signin', [UserController::class, 'processSignIn'])->name('signin.process');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/menu-edit', function () {
        $categories = Category::all();
        $menus = Menu::with('category')->get();
        return view('admin.menu-edit', compact('categories', 'menus'));
    })->name('menu-edit');

    Route::get('/kategori-edit', function () {
        $categories = Category::all();
        $menus = Menu::with('category')->get();
        return view('admin.kategori-edit', compact('categories', 'menus'));
    })->name('kategory-edit');


    Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');
    Route::delete('/menus/{menu}', [MenuController::class, 'destroy'])->name('menus.destroy');

    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::delete('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');


    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
