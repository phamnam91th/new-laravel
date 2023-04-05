<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\faceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dbController;
use App\Http\Controllers\PaginationController;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

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
// home page
// Route::get('/', function () {
//     return view('welcome');
// });

// frontend pages
Route::get('/', [faceController::class, 'detect'])->name('face-detect');
Route::get('/test', [faceController::class, 'getArr'])->name('getArr');


// backend pages
Route::get('/admin', [dbController::class, 'dashboard'])->name('dashboard');
Route::get('/show-item', [dbController::class, 'showData'])->name('personList');

Route::get('/new-person',[dbController::class, 'newPerson'])->name('newPerson');
Route::post('/add-person',[dbController::class, 'addPerson'])->name('addPerson');

Route::get('/new-picture/{id}/{name}',[dbController::class, 'newPicture'])->name('newPicture');
Route::post('/upload-picture/{id}/{name}',[dbController::class, 'uploadPicture'])->name('uploadPicture');


// login
Auth::routes();


Route::get('/paginate', [PaginationController::class, 'index']);

Route::get('/user', [HomeController::class,'user']);