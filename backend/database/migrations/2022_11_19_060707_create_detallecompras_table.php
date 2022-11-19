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
        Schema::create('detallecompras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->int('Cantidad');
            $table->decimal('PrecioUnitarioCompra');
            $table->decimal('PrecioUnitarioVenta');
            $table->bit('Activo');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallecompras');
    }
};
