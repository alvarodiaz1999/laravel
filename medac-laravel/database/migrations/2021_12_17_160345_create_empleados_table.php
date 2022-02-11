<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            //$table->id();
            $table->increments('ID_Empleado');
            $table->string("Nombre");
            $table->string("Apellido");
            $table->Integer("Edad")->nullable();
            $table->string("Domicilio");
            $table->unsignedInteger('ID_Sede');
            $table->foreign('ID_Sede')
                    ->references('ID')->on('sede')
                    ->onDelete('cascade');
                    $table-> timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
