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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/estudiante', function () {
   return view('estudiante.index');
});
Route::get('estudiante/create', [EstudianteController::class,'create']);

*/
Route::resource('estudiante', EstudianteController::class);



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('home');
