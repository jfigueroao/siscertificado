<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicController;
use App\Http\Controllers\UsuarioController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */




Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pdf', [App\Http\Controllers\PdfController::class, 'index'])->name('pdf');
/* Route::get('regusuario', [LicController::class, 'index'])->name('regusuario'); */

/* Route::resource('registrarLic', LicController::class); */
Route::get('reglicencia', [LicController::class, 'index'])->name('reglicencia');
Route::get('visualizar', [LicController::class, 'visualizar'])->name('visualizar');
Route::post('registrarlicencia', [LicController::class, 'registrarLic'])->name('registrarLic');

/* REGISTRO DE USUARIO */
Route::get('registroUsuario', [UsuarioController::class, 'index'])->name('index');
Route::post('registroUsuario', [UsuarioController::class, 'create'])->name('create');

/* LISTA USUARIOS */
Route::get('listaUsuario', [UsuarioController::class, 'show'])->name('show');

/* ACTUALIZACIÓN USUARIOS */
Route::get('editUsuario/{id}', [UsuarioController::class, 'edit'])->name('edit');
Route::put('editUsuario/updateUsuario', [UsuarioController::class, 'update'])->name('update');

/* ELIMINACION USUARIOS */
Route::delete('destroyUsuario/{id}', [UsuarioController::class, 'destroy'])->name('destroy');


/* Route::post('/home', 'LicController@registrarLic'); */
Auth::routes(['regusuario' => false]);
Route::get('/fpdf', function (Codedge\Fpdf\Fpdf\Fpdf $fpdf) {

    $fpdf->AddPage();
    $fpdf->SetFont('Courier', 'B', 18);
    $fpdf->Cell(50, 25, 'Hello World!');
    $fpdf->Output();
    exit;

/* REGISTRAR USUARIOS */

/* Route::get('/register', function () {
    return view('auth.register');
})->name('register'); */

});


