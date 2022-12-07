<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorBD;
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


Route::get('/principal', [controladorBD::class, 'Fprincipal'])->name('Nprincipal');
Route::get('/formulario', [ControladorBD::class, 'Fformulario'])->name('Nformulario');
Route::get('/tabla', [ControladorBD::class, 'Ftabla'])->name('Ntabla');
//Route::get('/consulta', [ControladorBD::class, 'Fconsulta'])->name('Nconsulta');

//mandar datos->post al form
Route::post('/guardarRecuerdos', [ControladorBD::class, 'FprocesarRecuerdos'])->name('Nprocesar');


//Funcion de create para regresar a la vista formulario
//Route::get('/consulta/create', [controladorBD::class, 'create'])->name('consulta.create');

//Funcion de store para guardar/insertar datos a la bd
Route::post('/consulta', [controladorBD::class, 'store'])->name('consulta.store');

//Funcion index para procesar la vista de consulta
Route::get('/consulta', [controladorBD::class, 'index'])->name('consulta.index');

//Funcion para mostrar un registro filtrado
Route::get('/consulta/{id}/edit', [controladorBD::class, 'edit'])->name('consulta.edit');

//Funcion update para editar el registro
Route::put('/consulta/{id}', [controladorBD::class, 'update'])->name('consulta.update');

//Funcion confirm para mostrar un registro a eliminar
Route::get('/consulta/{id}/confirm', [controladorBD::class, 'confirm'])->name('consulta.confirm');

//Funcion destroy para eliminar un registro filtrado
Route::delete('/consulta/{id}', [controladorBD::class, 'destroy'])->name('consulta.destroy');

