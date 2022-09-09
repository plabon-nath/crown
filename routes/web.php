<?php

use App\Http\Controllers\GoogleController;
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

/*
 * Google Authentication
 */
Route::get('auth/google', GoogleController::class.'@redirectToGoogle')->name('google.login');
Route::get('auth/google/callback', GoogleController::class.'@handleGoogleCallback');


Route::get('/', \App\Http\Livewire\Guest\Pages\Home::class)->name('home');
Route::get('/menu', \App\Http\Livewire\Guest\Pages\Menu::class)->name('menu');
Route::get('/contact', \App\Http\Livewire\Guest\Pages\Contact::class)->name('contact');
Route::get('/cart', \App\Http\Livewire\Guest\Pages\FoodCart::class)->name('cart');

Route::group([
    'middleware'=>[ 'auth:sanctum','admin',config('jetstream.auth_session'),'verified'],
    'prefix'=> 'admin',
    'as'=>'admin.',
    ], static function () {
    Route::get('/dashboard', App\Http\Livewire\Admin\Pages\Index::class)->name('dashboard');
    Route::get('/zip_code', App\Http\Livewire\Admin\Pages\ZipCode::class)->name('zip_code');
    Route::get('/category', App\Http\Livewire\Admin\Pages\Category::class)->name('category');

    Route::get('/food-items', App\Http\Livewire\Admin\Pages\Items\Index::class)->name('item.index');
    Route::get('/food-item/create', App\Http\Livewire\Admin\Pages\Items\Create::class)->name('item.create');
    Route::get('/food-item/{item}/edit', App\Http\Livewire\Admin\Pages\Items\Edit::class)->name('item.edit');

    Route::get('/attributes', App\Http\Livewire\Admin\Pages\Attribute::class)->name('attributes');

    Route::get('/food-item/{foodItem_id}/sku', App\Http\Livewire\Admin\Pages\Sku\Create::class,
        ['foodItem_id' => 'foodItem_id'])->name('sku.create');
});
