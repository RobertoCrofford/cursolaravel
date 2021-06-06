<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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
/*
Route::get('/', function () {

    return" bienvenido crofford";

});
Ejemplo del primero video
*/

Route::get('/', HomeController::class);


// Ejemplo

// controlador laravel 7.0 Route::get('cursos', 'CursoController@index'); cambio
Route::get('cursos', [CursoController::class,'index'])->name('cursos.index'); //rutalimpia
    /*return view('welcome');*/
    //return" Bienvenido a la pagina de cursos ";



Route::get('cursos/create', [CursoController::class,'create'])->name('cursos.create'); //rutalimpia
Route::post('cursos',[CursoController::class,'store'])->name('cursos.store');
Route::get('cursos/{curso}/edit',[CursoController::class,'edit'])->name('cursos.edit');
Route::put('cursos/{curso}',[CursoController:: class,'update'])->name('cursos.update');
Route::delete('cursos/{curso}', [CursoController::class,'destroy'])->name('cursos.destroy');
//function () {
    /*return view('welcome');*/
    //return" en esta pagina puedes cear ";

//});

Route::get('cursos/{curso}', [CursoController::class,'show'])->name('cursos.show'); //rutalimpia
//function ($curso) {
    /*return view('welcome');*/
    //return" bienvenido crofford al curso: $curso";

//});

 /*Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
    return" bienvenido crofford al curso: $curso, de la categaria $categoria";

}); */

/*
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso $curso, de la categoria $categoria";
    } else {
        return "Bienvenido al curso $curso";
    }

}); */
