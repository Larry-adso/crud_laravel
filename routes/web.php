<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EstudianteController;
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



Route::get('/estudiante', function () {
   return view('estudiante.index');
});
Route::get('estudiante/create', [EstudianteController::class,'create']);
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('home');

*/

//Route::resource('estudiante', EstudianteController::class);


Route::get('/', function () {
    return view('auth.login');
});

/*
Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    route::get('/', [EstudianteController::class, 'index'])->name('home');
});
