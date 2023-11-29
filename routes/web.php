<?php
use App\Http\Middleware\LogMiddleware;
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
Route::middleware([LogMiddleware::class])->group(function () {
    // Rutas que serán afectadas por el middleware
    Route::get('/', 'HomeController@index');
    // Agrega más rutas aquí
});

