<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tablaController;
use App\Models\BaseModel;
use Illuminate\Http\Request;
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




Route::get('/index', function(){
    return view('index');
})->name('index');
Route::post('/index2',[tablaController::class, 'ObtenerCodigo'])->name('index2');
Route::post('/index3',[tablaController::class, 'ObtenerColonia'])->name('index3');
Route::get('/index/{id}',[tablaController::class, 'index'])->name('ajax');

//AQUI EL TESTEO DE RUTA
//No tomar en cuenta
Route::post('/prueba', function(Request $peticion){
    $respuesta = BaseModel::where('codigo',$peticion->codigo)->get();
    
    foreach($respuesta as $res){
        echo "<p>".$res->Id."</p><br>";
        echo $res->codigo;
    }
    
})->name('prueba');