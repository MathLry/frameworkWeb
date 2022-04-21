<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitsController;
use App\Http\Controllers\GlassesController;
use App\Http\Controllers\ImageUploadController;

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
})->name('home');

/*-------------------- FRUITS --------------------*/
Route::get(
    '/fruits',
    [FruitsController::class, 'index']
)->name('fruits.index');

Route::get(
    '/fruits/create',
    [FruitsController::class, 'create']
)->name('fruits.create');

Route::get(
    '/fruits/{id}/edit',
    [FruitsController::class, 'edit']
)->name('fruits.edit');

Route::put(
    '/fruits/{id}/update',
    [FruitsController::class, 'update']
)->name('fruits.update');

Route::delete(
    '/fruits',
    [FruitsController::class, 'delete']
)->name('fruits.delete');

Route::post(
    '/fruits',
    [FruitsController::class, 'store']
)->name('fruits.store');

/*-------------------- GLASSES --------------------*/
Route::get(
    '/glasses',
    [GlassesController::class, 'index']
)->name('glasses.index');

Route::get(
    '/glasses/create',
    [GlassesController::class, 'create']
)->name('glasses.create');

Route::get(
    '/glasses/{id}/edit',
    [GlassesController::class, 'edit']
)->name('glasses.edit');

Route::put(
    '/glasses/{id}/update',
    [GlassesController::class, 'update']
)->name('glasses.update');

Route::delete(
    '/glasses',
    [GlassesController::class, 'delete']
)->name('glasses.delete');

Route::post(
    '/glasses',
    [GlassesController::class, 'store']
)->name('glasses.store');

/*-------------------- SYRUPS --------------------*/
Route::get(
    '/syrups',
    [SyrupsController::class, 'index']
)->name('syrups.index');

Route::get(
    '/syrups/create',
    [SyrupsController::class, 'create']
)->name('syrups.create');

Route::get(
    '/syrups/{id}/edit',
    [SyrupsController::class, 'edit']
)->name('syrups.edit');

Route::put(
    '/syrups/{id}/update',
    [SyrupsController::class, 'update']
)->name('syrups.update');

Route::delete(
    '/syrups',
    [SyrupsController::class, 'delete']
)->name('syrups.delete');

Route::post(
    '/syrups',
    [SyrupsController::class, 'store']
)->name('syrups.store');

/*-------------------- SOFTS --------------------*/
Route::get(
    '/softs',
    [SoftsController::class, 'index']
)->name('syrups.index');

Route::get(
    '/softs/create',
    [SoftsController::class, 'create']
)->name('softs.create');

Route::get(
    '/softs/{id}/edit',
    [SoftsController::class, 'edit']
)->name('softs.edit');

Route::put(
    '/softs/{id}/update',
    [SoftsController::class, 'update']
)->name('softs.update');

Route::delete(
    '/softs',
    [SoftsController::class, 'delete']
)->name('softs.delete');

Route::post(
    '/softs',
    [SoftsController::class, 'store']
)->name('softs.store');

/*-------------------- COCKTAILS --------------------*/
Route::get(
    '/cocktails',
    [CocktailsController::class, 'index']
)->name('cocktails.index');