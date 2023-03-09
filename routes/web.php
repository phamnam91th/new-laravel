<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\StudentController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/calculator', [CalculatorController::class, 'showCalculator'])->name('calculator');
Route::post('/calculator', [CalculatorController::class, 'portShowCalculator'])->name('calculator');
Route::get('/ptbn/{a}x+{b}=0', function($a,$b) {
    $result = $a + $b;
    return $result;
});

// url->control -> view 
Route::get('/show-student',[StudentController::class,'showStudent'])->name('listStudent');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
