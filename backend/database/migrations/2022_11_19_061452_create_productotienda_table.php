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
        Schema::create('productotienda', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('PrecioUnidadCompra');
            $table->decimal('PrecioUnidadVenta');
            $table->bigInteger('Stock');
            $table->boolean('Activo');
            $table->boolean('Iniciado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productotienda');
    }
};
