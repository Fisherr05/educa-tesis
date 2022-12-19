<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/dashboard',function () {return view('admin.dashboard');})->name('dashboard');
Route::get('/docentes',function () {return view('admin.docentes.index');})->name('docentes');
Route::get('/estudiantes',function () {return view('admin.estudiantes.index');})->name('estudiantes');
Route::get('/paralelos',function () {return view('admin.paralelos.index');})->name('paralelos');
Route::get('/pendientes',function () {return view('admin.pendientes.index');})->name('pendientes');
Route::get('hola',function (){
    $tables = DB::select('SHOW TABLES');
    $dbName='Tables_in_'.env('DB_DATABASE');
    // foreach ($tables as $table) {
    //     foreach ($table as $key => $value)
    //         echo $value.'<br>';
    // }
    // foreach($tables as $table)
    // {
    //     echo $table->$dbName.'<br>';
    // }
    $controllername = str_replace(["\crocodicstudio\crudbooster\controllers\\", "App\Http\Controllers\\"], "", strtok(Route::currentRouteAction(), '@'));
    //return dd(Route::currentRouteAction());
    $colms=DB::getSchemaBuilder()->getColumnListing('niveles');
    return dd($colms);
});
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('dashboard');
// });

//Route Hooks - Do not delete//
	Route::view('subtemarios', 'livewire.subtemarios.index')->middleware('auth');
	Route::view('temarios', 'livewire.temarios.index')->middleware('auth');
	Route::view('actividades', 'livewire.actividades.index')->middleware('auth');
	Route::view('cualidades', 'livewire.cualidades.index')->middleware('auth');
	Route::view('estados', 'livewire.estados.index')->middleware('auth');
    Route::view('niveles', 'livewire.niveles.index')->middleware('auth');
