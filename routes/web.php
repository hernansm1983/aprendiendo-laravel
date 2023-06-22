<?php
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\FrutasController;
use Illuminate\Support\Facades\Route;
$namespace = 'App\Http\Controllers';
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

Route::get('/peliculas/{pagina?}', [PeliculaController::class, 'index'])->name('pelicula.index');
/*
Route::get('/peliculas/{pagina?}', [
    'uses' => 'PeliculaController@index',
    'as' => 'pelicula.index'
]);
*/
Route::get('/detalle/{year?}', [
    'middleware' => 'testyear',
    'uses' => '\App\Http\Controllers\PeliculaController@detalle',
    'as' => 'pelicula.detalle'
]);

Route::resource('/usuario', $namespace.'\UsuarioController');

Route::get('/redirigir', [PeliculaController::class, 'redirigir']);


Route::get('/formulario', [PeliculaController::class, 'formulario']);
Route::post('/recibir', [PeliculaController::class, 'recibir']);

Route::group(['prefix'=>'frutas'], function(){
    Route::get('/', [FrutasController::class, 'index']);  
    Route::get('detail/{id}', [FrutasController::class, 'detail']);  
});

/*
Route::get('/mostrar-fecha', function(){
   $titulo = "Estoy mostrando la fecha";
   return view('mostrar-fecha', array(
       'titulo' => $titulo
   ));
});


Route::get('/pelicula/{titulo}/{year?}', function($titulo = 'No hay una pelicula seleccionada', $year=2023){
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));

//--- 2 formas distintas de generar rutas ---
//--- A ---
Route::get('/listado-peliculas-1', function(){
    $titulo = "Listado de Peliculas 1";
    return view('peliculas.listado', array(
        'titulo' => $titulo
    ));
});

//---B---
Route::get('/listado-peliculas-2', function(){
    $titulo = "Listado de Peliculas 2";
    $listado = array('batman', 'robin', 'guason');
    return view('peliculas.listado')
        ->with('titulo', $titulo)
        ->with('listado', $listado);
});
//--------------------------------------------


Route::get('/pagina-generica', function(){
    return view('pagina');
});
*/