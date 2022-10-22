<?php

use App\Http\Controllers\PostController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//localhost/
//localhost/contact => contact
//localhost/blog => blog
//localhost/about => about

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');

Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/blog/crear', [PostController::class, 'crear'])->name('blog.crear');
Route::get('/blog/{id}/editar', [PostController::class, 'editar'])->name('blog.editar');
Route::get('/blog/{id}', [PostController::class, 'detalle'])->name('blog.detalle');
Route::post('/blog', [PostController::class, 'store'])->name('blog.store');
Route::patch('/blog{id}', [PostController::class, 'actualiza'])->name('blog.actualiza');


