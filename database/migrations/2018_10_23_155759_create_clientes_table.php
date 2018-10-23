<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('id')->unique()->required();
            $table->string('tipo_identificacion');
            $table->date('fecha_expedicion');
            $table->string('lugar_expedicion');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->date('fecha_nacimiento');
            $table->string('sexo');
            $table->string('grupo_sanguineo');
            $table->string('estado_civil');
            $table->integer('numero_hijos');
            $table->string('lugar_residencia');
            $table->string('direccion_residencia');
            $table->string('zona');
            $table->integer('telefono1');
            $table->integer('telefono2');
            $table->string('usuario_sistema');
            $table->integer('id_empresa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
