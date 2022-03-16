<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaseModel;


class tablaController extends Controller
{
    public function index($id){
        return BaseModel::where('municipio',$id)->get();
    }
    public function ObtenerCodigo(Request $peticion){
        $respuesta = BaseModel::where('codigo',$peticion->codigo)->get();
        return view('index2',['respuesta' => $respuesta]);
    }
    public function ObtenerColonia(Request $peticion){
        $respuesta = BaseModel::where('municipio',$peticion->colonia)->get();
        return view('index3',['respuesta' => $respuesta]);
    }
}
