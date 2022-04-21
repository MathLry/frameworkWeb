<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\AlcoolsController;
use App\Http\Controllers\AlcoolListController;
use App\Http\Controllers\SoftsController;
use App\Http\Controllers\SyrupsController;
use App\Http\Controllers\cocktailsController;
use App\Http\Controllers\FruitsController;
use App\Http\Controllers\GlassesController;



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

//Syrups Type of Routes
/*Route::get(
    '/cocktails',
   [SyrupsController::class, 'index']
)->name('cocktails.index');*/

//Fruits Type of Routes
/*Route::get(
    '/cocktails',
   [FruitsController::class, 'index']
)->name('cocktails.index');*/


//Softs Type of Routes
Route::any(
    '/cocktails',
   [cocktailsController::class, 'cocktail']
)->name('cocktails.index');
Route::any(
    '/cocktails/store',
   [SoftsController::class, 'storec']
)->name('cocktails.storec');

Route::get(
    '/listcocktails',
    [cocktailsController::class, 'index']
)->middleware(['auth'])->name('cocktails.cocktail');
 

// // Alcool Type of Routes
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::get(
//     '/alcool',
//    [AlcoolsController::class, 'index']
// )->name('alcools.index');
 

// Route::get(
//     '/alcool/create',
//    [AlcoolsController::class, 'create']
// )->name('alcools.create');
 

// Route::post(
//     '/alcool/',
//    [AlcoolsController::class, 'store']
// )->name('alcools.store');

// Route::get(
//     '/alcool/{id}/delete',
//    [AlcoolsController::class, 'delete']
// )->name('alcools.delete');

// Route::get(
//     '/alcool/{id}/edit',
//    [AlcoolsController::class, 'edit']
// )->name('alcools.edit');

// Route::put(
//     '/alcool/{id}/update',
//    [AlcoolsController::class, 'update']
// )->name('alcools.update');

// // Alcool List routes
// Route::get(
//     '/alcool/list',
//    [AlcoolListController::class, 'index']
// )->name('listAlcool.index');

// Route::get(
//     '/alcool/list/create',
//    [AlcoolListController::class, 'create']
// )->name('listAlcool.create');
 

// Route::post(
//     '/alcool/list',
//    [AlcoolListController::class, 'store']
// )->name('listAlcool.store');

// Route::get(
//     '/alcool/list/{id}/delete',
//    [AlcoolListController::class, 'delete']
// )->name('listAlcool.delete');

// Route::get(
//     '/alcool/list/{id}/edit',
//    [AlcoolListController::class, 'edit']
// )->name('listAlcool.edit');

// Route::put(
//     '/alcool/list/{id}/update',
//    [AlcoolListController::class, 'update']
// )->name('listAlcool.update');
 /**/
// Alcool Type of Routes

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get(
    '/dashboard/alcool',
   [AlcoolsController::class, 'index']
)->middleware(['auth'])->name('alcools.index');
 

Route::get(
    '/alcool/create',
   [AlcoolsController::class, 'create']
)->middleware(['auth'])->name('alcools.create');
 

Route::post(
    '/alcool/',
   [AlcoolsController::class, 'store']
)->middleware(['auth'])->name('alcools.store');

Route::get(
    '/alcool/{id}/delete',
   [AlcoolsController::class, 'delete']
)->middleware(['auth'])->name('alcools.delete');

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
)->middleware(['auth'])->name('listAlcool.index');

Route::get(
    '/alcool/list/create',
   [AlcoolListController::class, 'create']
)->middleware(['auth'])->name('listAlcool.create');
 

Route::post(
    '/alcool/list',
   [AlcoolListController::class, 'store']
)->middleware(['auth'])->name('listAlcool.store');

Route::get(
    '/alcool/list/{id}/delete',
   [AlcoolListController::class, 'delete']
)->middleware(['auth'])->name('listAlcool.delete');


Route::get(
    '/alcool/list/{id}/edit',
   [AlcoolListController::class, 'edit']
)->middleware(['auth'])->name('listAlcool.edit');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::put(
    '/alcool/list/{id}/update',
   [AlcoolListController::class, 'update']
)->middleware(['auth'])->name('listAlcool.update');
/*Fruit*/

Route::get(
    '/fruits',
    [FruitsController::class, 'index']
)->middleware(['auth'])->name('fruits.index');

Route::get(
    '/fruits/create',
    [FruitsController::class, 'create']
)->middleware(['auth'])->name('fruits.create');

Route::get(
    '/fruits/{id}/edit',
    [FruitsController::class, 'edit']
)->middleware(['auth'])->name('fruits.edit');

Route::put(
    '/fruits/{id}/update',
    [FruitsController::class, 'update']
)->middleware(['auth'])->name('fruits.update');

Route::delete(
    '/fruits',
    [FruitsController::class, 'delete']
)->middleware(['auth'])->name('fruits.delete');

Route::post(
    '/fruits',
    [FruitsController::class, 'store']
)->middleware(['auth'])->name('fruits.store');

/*-------------------- GLASSES --------------------*/
Route::get(
    '/glasses',
    [GlassesController::class, 'index']
)->middleware(['auth'])->name('glasses.index');

Route::get(
    '/glasses/create',
    [GlassesController::class, 'create']
)->middleware(['auth'])->name('glasses.create');

Route::get(
    '/glasses/{id}/edit',
    [GlassesController::class, 'edit']
)->middleware(['auth'])->name('glasses.edit');

Route::put(
    '/glasses/{id}/update',
    [GlassesController::class, 'update']
)->middleware(['auth'])->name('glasses.update');

Route::delete(
    '/glasses',
    [GlassesController::class, 'delete']
)->middleware(['auth'])->name('glasses.delete');

Route::post(
    '/glasses',
    [GlassesController::class, 'store']
)->middleware(['auth'])->name('glasses.store');
/*-------------------- SYRUPS --------------------*/
Route::get(
    '/syrups',
    [SyrupsController::class, 'index']
)->middleware(['auth'])->name('syrups.index');

Route::get(
    '/syrups/create',
    [SyrupsController::class, 'create']
)->middleware(['auth'])->name('syrups.create');

Route::get(
    '/syrups/{id}/edit',
    [SyrupsController::class, 'edit']
)->middleware(['auth'])->name('syrups.edit');

Route::put(
    '/syrups/{id}/update',
    [SyrupsController::class, 'update']
)->middleware(['auth'])->name('syrups.update');

Route::delete(
    '/syrups',
    [SyrupsController::class, 'delete']
)->middleware(['auth'])->name('syrups.delete');

Route::post(
    '/syrups',
    [SyrupsController::class, 'store']
)->middleware(['auth'])->name('syrups.store');

/*-------------------- SOFTS --------------------*/
Route::get(
    '/softs',
    [SoftsController::class, 'index']
)->middleware(['auth'])->name('softs.index');

Route::get(
    '/softs/create',
    [SoftsController::class, 'create']
)->middleware(['auth'])->name('softs.create');

Route::get(
    '/softs/{id}/edit',
    [SoftsController::class, 'edit']
)->middleware(['auth'])->name('softs.edit');

Route::put(
    '/softs/{id}/update',
    [SoftsController::class, 'update']
)->middleware(['auth'])->name('softs.update');

Route::delete(
    '/softs',
    [SoftsController::class, 'delete']
)->middleware(['auth'])->name('softs.delete');

Route::post(
    '/softs',
    [SoftsController::class, 'store']
)->middleware(['auth'])->name('softs.store');


require __DIR__.'/auth.php';
 