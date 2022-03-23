<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlcoolsController;
use App\Http\Controllers\AlcoolListController;

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
// Alcool Type of Routes
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get(
    '/alcool',
   [AlcoolsController::class, 'index']
)->name('alcools.index');
 

Route::get(
    '/alcool/create',
   [AlcoolsController::class, 'create']
)->name('alcools.create');
 

Route::post(
    '/alcool/',
   [AlcoolsController::class, 'store']
)->name('alcools.store');

Route::get(
    '/alcool/{id}/delete',
   [AlcoolsController::class, 'delete']
)->name('alcools.delete');

Route::get(
    '/alcool/{id}/edit',
   [AlcoolsController::class, 'edit']
)->name('alcools.edit');

Route::put(
    '/alcool/{id}/update',
   [AlcoolsController::class, 'update']
)->name('alcools.update');

// Alcool List routes
Route::get(
    '/alcool/list',
   [AlcoolListController::class, 'index']
)->name('listAlcool.index');

Route::get(
    '/alcool/list/create',
   [AlcoolListController::class, 'create']
)->name('listAlcool.create');
 

Route::post(
    '/alcool/list',
   [AlcoolListController::class, 'store']
)->name('listAlcool.store');