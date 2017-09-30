<?php


use App\Empleado;

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
	$empleados = Empleado::all();
    return view('welcome')->with("empleados", $empleados);
});

Route::get('/alta', ['uses' => 'empleadoController@alta']);
Route::post('/altaempleadopost', ['uses' => 'empleadoController@altaEmpleadoPost']);
