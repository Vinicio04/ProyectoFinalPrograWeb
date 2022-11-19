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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Codigo');
            $table->decimal('CantidadProducto');
            $table->decimal('CantidadTotal');
            $table->decimal('TotalCosto');
            $table->decimal('ImporteRecibido');
            $table->decimal('ImporteCambio');
            $table->boolean('Activo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
};
