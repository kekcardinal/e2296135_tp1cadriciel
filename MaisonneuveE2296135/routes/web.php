<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [EtudiantController::class, "index"])->name('blog.index');
Route::get('blog-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('blog.edit');
Route::put('blog-edit/{etudiant}', [EtudiantController::class, 'update']);
Route::get('blog/{etudiant}', [EtudiantController::class, 'show'])->name('blog.show');
Route::delete('blog/{etudiant}', [EtudiantController::class, 'destroy']);
Route::get('blog-ajout', [EtudiantController::class, 'create'])->name('blog.ajout');
Route::post('blog-ajout', [EtudiantController::class, 'store']);