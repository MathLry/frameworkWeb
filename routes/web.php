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

/*-------------------- COCKTAILS --------------------*/
Route::get(
    '/cocktails',
    [CocktailsController::class, 'index']
)->name('cocktails.index');