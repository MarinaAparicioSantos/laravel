<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home_Controller;
use App\Http\Controllers\biblioteca_Controller;
use App\Http\Controllers\enviarCorreoController;
use App\Http\Controllers\generarPdfController;


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

Route::post('/sendEmail', [enviarCorreoController::class, 'sendEmail']);

Route::get('/solicitud', [enviarCorreoController::class, 'solicitud']);

Route::get('/listadoPeticiones', [enviarCorreoController::class, 'listadoPeticiones']);


Route::get('/', home_Controller::class);

Route::get('/mostrarLibros', [biblioteca_Controller::class, 'mostrarLibros']);

Route::get('/showLibro/{ISBN}', [biblioteca_Controller::class, 'showLibro']);

Route::get('/createLibro', [biblioteca_Controller::class, 'createLibro']);

Route::post('/store', [biblioteca_Controller::class, 'store']);

Route::post('/edit', [biblioteca_Controller::class, 'edit']);

Route::get('/editLibro/{libro}', [biblioteca_Controller::class, 'editLibro']);


Route::get('/mostrarEditoriales', [biblioteca_Controller::class, 'mostrarEditoriales']);

Route::get('/mostrarUnaEditorial/{id}', [biblioteca_Controller::class, 'mostrarUnaEditorial']);

Route::get('/crear', [biblioteca_Controller::class, 'crear']);

Route::post('/createEditorial', [biblioteca_Controller::class, 'createEditorial']);


Route::get('/variosPDF', [generarPdfController::class, 'variosPDF']);
Route::get('/unoPDF/{ISBN}', [generarPdfController::class, 'unoPDF']);







// Route::get('/', function () {
//      return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

