<?php

use App\Http\Controllers\Actividades;
use App\Http\Controllers\Temarios;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuariosPendientes;
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
    return view('main.index');
})->name('home');



Route::get('/info', function () {
    return view('main.informacion');
});
Route::get('/unidadeducativa', function () {
    return view('main.unidad-educativa');
});
Route::get('/cursos', function () {
    return view('main.cursos');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');
// Route::get('/docentes',function () {return view('admin.docentes.index');})->name('docentes');
// Route::get('/estudiantes',function () {return "Hola";})->name('estudiantes');
// Route::get('/paralelos', function () {
//     return view('admin.paralelos.index');
// })->name('paralelos');
// Route::get('/pendientes', function () {
//     return view('admin.pendientes.index');
// })->name('pendientes');
// Route::get('hola', function () {
//     $tables = DB::select('SHOW TABLES');
//     $dbName = 'Tables_in_' . env('DB_DATABASE');
//     // foreach ($tables as $table) {
//     //     foreach ($table as $key => $value)
//     //         echo $value.'<br>';
//     // }
//     // foreach($tables as $table)
//     // {
//     //     echo $table->$dbName.'<br>';
//     // }
//     $controllername = str_replace(["\crocodicstudio\crudbooster\controllers\\", "App\Http\Controllers\\"], "", strtok(Route::currentRouteAction(), '@'));
//     //return dd(Route::currentRouteAction());
//     $colms = DB::getSchemaBuilder()->getColumnListing('niveles');
//     return dd($colms);
// });
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
Route::view('niveles', 'livewire.niveles.index')->middleware(['auth','can:admin'])->name('niveles');
Route::view('estudiante', 'livewire.estudiantes.index')->middleware(['auth'])->name('estudiante');
Route::view('docentes', 'livewire.docentes.index')->middleware(['auth','can:admin'])->name('docentes');
Route::view('usuarios_pendientes', 'livewire.usuarios-pendientes.index')->middleware(['auth','can:admin'])->name('usuarios_pendientes');
Route::view('subtemarios', 'livewire.subtemarios.index')->middleware(['auth'])->name('subtemarios');
Route::view('temarios', 'livewire.temarios.index')->middleware(['auth'])->name('temarios');
Route::view('actividades', 'livewire.actividades.index')->middleware(['auth'])->name('actividades');
Route::view('cualidades', 'livewire.cualidades.index')->middleware(['auth','can:admin'])->name('cualidades');
Route::view('estados', 'livewire.estados.index')->middleware(['auth','can:admin'])->name('estados');
Route::view('reportes', 'estudiantes.reporte')->middleware(['auth'])->name('reportes');

Route::post('/register', [UsuariosPendientes::class, 'create'])
    ->middleware(['guest:' . config('fortify.guard')])->name('register');

Route::get('/pendientes', [UsuariosPendientes::class, 'index'])
    ->middleware(['guest:' . config('fortify.guard')])->middleware(['auth','can:admin'])->name('pendientes');

Route::get('listado/{id}', [Actividades::class, 'listado'])->middleware(['auth'])->name('listado');
Route::get('/temario/{actividad}', [Temarios::class, 'porActividad'])->middleware(['auth'])->name('temario');
Route::get('/view-temario/{temario}', [Temarios::class, 'porTemario'])->middleware(['auth'])->name('view-temario');

Route::get('vista-estudiante', [Actividades::class,'index'])->middleware(['auth'])->name('vista-estudiante');

Route::resource('users', UserController::class)->only('index','edit','update')->middleware(['auth','can:admin'])->names('admin.users');
