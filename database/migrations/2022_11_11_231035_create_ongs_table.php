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
        Schema::create('ongs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categoria_id')
                    ->nullable()
                    ->constrained('categorias')
                    ->cascadeOnUpdate()
                    ->nullOnDelete();
                    
            $table->string('nombreOng',100);
            $table->string('nombreContacto',50);
            $table->string('direccionOng',100);
            $table->string('telefonoOng',12);
            $table->text('descripcionOng');
            $table->string('correoOng',100);
            $table->string('fotoOng')->nullable();
            $table->boolean('estadoOng');
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
        Schema::dropIfExists('ongs');
    }
};
