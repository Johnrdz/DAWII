<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_pedido', function (Blueprint $table) {
            $table->bigInteger('Id_Articulo')->unsigned();
            $table->bigInteger('Id_Pedido')->unsigned();;
            $table->integer('Cantidad');
            $table->float('Descuento');
            $table->foreign('Id_Pedido')->references('Id_Pedido')->on('pedido')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Id_Articulo')->references('Id_Articulo')->on('articulo')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedido');
    }
};
