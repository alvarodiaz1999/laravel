<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelfichajes extends Model
{
    use HasFactory;
    // Nombre de la tabla
        protected $table = "fichaje";
    // Primaty key (ID)    
        protected $primarykey = "ID_Fichaje";
    //Campos de cada tabla
        protected $fillable = ['Hora de entrada','Hora de salida','ID_Empleado','created_at','updated_at'];
    
        public function obtenercentroPorCodigo($cod){
            return modelfichajes::find($cod);
        }
        public function obtenercentroPorTexto($texto){
            return modelfichajes::where('Nombre','like','%' . $texto . '%')->take(10)->get();
        }
}
