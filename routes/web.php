<?php

use App\Http\Livewire\JemWebsite\Admin;
use App\Http\Livewire\JemWebsite\Caps;
use App\Http\Livewire\JemWebsite\Dashboard;
use App\Http\Livewire\JemWebsite\ShopnowContent;
use Illuminate\Support\Facades\Route;

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

Route::get('practice',Dashboard::class)->name('practice');
Route::get('admin',Admin::class)->name('admin');
Route::get('shop',ShopnowContent::class)->name('shop');
