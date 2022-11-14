<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donativos', function (Blueprint $table) {
            $table->id();
            $table->string('codigoDon',10);
            $table->integer('usuario_id');
            $table->integer('ong_id');
            $table->integer('cantidadDon');
            $table->string('descripcionDon',200);
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
        Schema::dropIfExists('donativos');
    }
};
