<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichaje', function (Blueprint $table) {
            $table->increments('ID_Fichaje');
            $table->string("Hora de entrada");
            $table->string("Hora de salida");
            $table->timestamps();
            $table->unsignedInteger('ID_Empleado');
            $table->foreign("ID_Empleado")
                ->references('ID_Empleado')->on('empleados')
                ->onDelete('cascade');
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichaje');
    }
}
