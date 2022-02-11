<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelsede extends Model
{
    use HasFactory;
// Nombre de la tabla
    protected $table = "sede";
// Primaty key (ID)    
    protected $primarykey = "ID";
//Campos de cada tabla
    protected $fillable = ['Nombre','Localizacion'];

    public function obtenercentroPorCodigo($cod){
        return modelsede::find($cod);
    }
    public function obtenercentroPorTexto($texto){
        return modelsede::where('Nombre','like','%' . $texto . '%')->take(10)->get();
    }
}
