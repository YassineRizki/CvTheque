<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CvController;
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


Route::get('/cvss', [CvController::class,'index']);

Route::get('cvs/create', [CvController::class,'create']);

Route::get('/cvs', [CvController::class,'store']);

Route::get('/cvs/{id}/edit', [CvController::class,'edit']);

Route::put('/cvs/{id}', [CvController::class,'update']);

Route::delete('/cvs/{id}', [CvController::class,'destroy']);



Route::get('/', function () {
    return view('welcome');
});

Route::get('/Services', function () {
    return view('Services');
});


Route::get('/acceuil', function () {
    return view('accueil');
});


Route::get('/yassine', [UsersController::class,'entrer'] );

Route::get('/View', [UsersController::class,'voir'] );

Route::get('/Noob/{name}/{age}', function($name , $age){
	return 'Noob  '.$name . 'tu as ' . $age . 'ans';
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
