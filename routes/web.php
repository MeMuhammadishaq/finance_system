<?php

use App\Http\Controllers\AddDataController;
use App\Http\Controllers\CostomerController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/add-costomer', function () {
//     return view('add-costomer');
// });


Route::post('/costomer-data',[AddDataController::class,'store_costomer_data'])->name('insert_data');

Route::get('/add-data/{id}/{name}',[CostomerController::class,'add_data'])->name('add_data');

Route::get('/',[CostomerController::class,'read'])->name('welcome');

Route::get('/add-costomer',[CostomerController::class,'view'])->name('view');

Route::post('/add-costomer',[CostomerController::class,'insert'])->name('insert');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
