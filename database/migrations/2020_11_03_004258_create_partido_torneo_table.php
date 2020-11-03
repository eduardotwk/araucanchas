<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartidoTorneoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partido_torneo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('torneo_id')->unsigned();
            $table->foreign('torneo_id')->references('id')->on('torneos')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->string('equipo_1');
            $table->string('equipo_2');
            $table->time('hora');
            $table->date('fecha');
            $table->string('etapa');
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
        Schema::dropIfExists('partido_torneo');
    }
}
