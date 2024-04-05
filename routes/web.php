<?php

use App\Http\Controllers\backend\AdminpanelController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\ProfileController;
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

Route::prefix('/')->group(function(){
    Route::get('/',[IndexController::class,'Index'])->name('Home');
});


Route::get('single',function(){
    return view('frontend.single_page');
})->name('single');


Route::prefix('/dashboard')->middleware(['auth', 'verified'])->group(function(){
    Route::get('/',[AdminpanelController::class,'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // blog
    Route::resource('blog', BlogController::class);
});

require __DIR__.'/auth.php';
