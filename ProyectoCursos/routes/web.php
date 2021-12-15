<?php

use App\Http\Livewire\Cursos\CursosCreate;
use App\Http\Livewire\Cursos\CursosDelete;
use App\Http\Livewire\Cursos\CursosEdit;
use App\Http\Livewire\Cursos\CursosIndex;
use App\Http\Livewire\Cursos\CursosMostrar;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Usuarios\UsuariosCreate;
use App\Http\Livewire\Usuarios\UsuariosDelete;
use App\Http\Livewire\Usuarios\UsuariosEdit;
use App\Http\Livewire\Usuarios\UsuariosIndex;
use App\Http\Livewire\Usuarios\UsuariosMostrar;
use App\Http\Livewire\Ventas\VentasCreate;
use App\Http\Livewire\Ventas\VentasIndex;
use App\Models\curso;
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
Route::group(['middleware' => 'auth'], function () {


    Route::get('/cursos', CursosIndex::class)->name('cursos.index');
    Route::get('/cursos/create', CursosCreate::class)->name('cursos.create');
    Route::get('/cursos/{curso}/edit', CursosEdit::class)->name('cursos.edit');
    Route::get('/cursos/{curso}/mostrar', CursosMostrar::class)->name('cursos.mostrar');
    Route::get('/cursos/{curso}/delete', CursosDelete::class)->name('cursos.delete');


    Route::get('/usuarios', UsuariosIndex::class)->name('usuario.index');
    Route::get('/usuarios/create', UsuariosCreate::class)->name('usuario.create');
    Route::get('/usuarios/{usuario}/delete', UsuariosDelete::class)->name('usuario.delete');
    Route::get('/usuarios/{usuario}/edit', UsuariosEdit::class)->name('usuario.edit');
    Route::get('/usuarios/{usuario}/mostrar', UsuariosMostrar::class)->name('usuario.mostrar');

    Route::get('/ventas', VentasIndex::class)->name('ventas.index');
    Route::get('/ventas/create', VentasCreate::class)->name('ventas.create');
});

Route::get('/login', Login::class)->name('login');
