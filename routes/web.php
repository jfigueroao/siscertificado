<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pdf', [App\Http\Controllers\PdfController::class, 'index'])->name('pdf');
Route::get('/licencias/regusuario', [App\Http\Controllers\LicController::class, 'index'])->name('regusuario');
Route::get('/licencias/reglicencia', [App\Http\Controllers\LicController::class, 'index'])->name('reglicencia');
Route::get('/licencias/visualizar', [App\Http\Controllers\LicController::class, 'visualizar'])->name('visualizar');

/* Route::post('/home', 'LicController@registrarLic'); */
Route::post('/home', [App\Http\Controllers\LicController::class, 'registrarLic'])->name('registrarLic');
Route::get('/fpdf', function (Codedge\Fpdf\Fpdf\Fpdf $fpdf) {

    $fpdf->AddPage();
    $fpdf->SetFont('Courier', 'B', 18);
    $fpdf->Cell(50, 25, 'Hello World!');
    $fpdf->Output();
    exit;

});


