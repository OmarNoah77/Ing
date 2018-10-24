<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivipolaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divipolas', function (Blueprint $table) {
            $table->integer('idcodigodivipola');
            $table->integer('departamento');
            $table->integer('municipio');
            $table->string('nombredpto');
            $table->string('nombremunicipio');
            $table->date('FechaSistema');
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
        Schema::dropIfExists('divipolas');
    }
}
