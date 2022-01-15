<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::post('contact/me', [ContactController::class, 'contactMe'])->name('contactme');
Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('download', function (){
    $name = public_path('myfiles/files/CV.pdf');
    return response()->file($name);
})->name('download');
