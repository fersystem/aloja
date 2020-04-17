<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientopesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('movimientopesos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_movimiento');
            $table->decimal('monto', 19, 2);
            $table->text('concepto');
            $table->integer('cuenta_id');
            $table->integer('unidad_id');
            $table->integer('cliente_id');
            $table->integer('pax_id');
            $table->integer('reserva_id');
            $table->text('obs_movimiento_pesos');
            $table->timestamps();

            /*
            $table->foreign('cuenta_id')
                ->references('id')->on('cuentas')
                ->onDelete('cascade');

                Schema::table('movimientopesos', function (Blueprint $table) {
                    $table->foreignId('cuenta_id')->constrained()
                    ->references('id')->on('cuentas')
                    ->onDelete('cascade');
                    */



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientopesos');
    }
}
