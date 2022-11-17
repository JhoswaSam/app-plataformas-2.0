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
            $table->foreignId('usuario_id')
                    ->nullable()
                    ->constrained('usuarios')
                    ->cascadeOnUpdate()
                    ->nullOnDelete();

            $table->foreignId('ong_id')
                    ->nullable()
                    ->constrained('ongs')
                    ->cascadeOnUpdate()
                    ->nullOnDelete();

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
