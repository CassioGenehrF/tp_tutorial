<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\TutorialController;
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

Route::get('', [function () {
    return view('index');
}])->name('index');

Route::get('login', [LoginController::class, 'login'])->name('login');

Route::get('tutorials', [TutorialController::class, 'index'])->name('tutorials');
Route::get('tutorials/{id}', [TutorialController::class, 'show'])->name('tutorial');

Route::post('login', [LoginController::class, 'auth'])->name('login.auth');
Route::post('theme', [ThemeController::class, 'switch'])->name('theme');

Route::middleware(['auth'])->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('admin', [AdminController::class, 'index'])->name('admin');
    Route::post('tutorial', [AdminController::class, 'createTutorial'])->name('admin.add_tutorial');
});

