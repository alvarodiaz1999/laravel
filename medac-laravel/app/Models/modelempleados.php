<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelempleados extends Model
{
    // Nombre de la tabla
    protected $table = "empleados";
// Primaty key (ID)    
    protected $primarykey = "ID_Empleado";
//Campos de cada tabla
    protected $fillable = ['Nombre','Apellido','Edad','Domicilio','ID_Sede','created_at','updated_at'];

    public function obtenercentroPorCodigo($cod){
        return modelempleados::find($cod);
    }
    public function obtenercentroPorTexto($texto){
        return modelempleados::where('Nombre','like','%' . $texto . '%')->take(10)->get();
    }
}
