<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computadors', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('limasoft');
            $table->string('serialnr');
            $table->foreignId('marca_id')->constrained();
            $table->tinyInteger('recondicionado');
            $table->foreignId('tipo_id')->constrained();
            $table->foreignId('modelo_id')->constrained();
            $table->string('sokey')->nullable();
            $table->foreignId('fornecedor_id')->constrained();
            $table->string('faturac')->nullable();
            $table->date('datafaturac')->nullable();
            $table->foreignId('cliente_id')->constrained();
            $table->string('faturav')->nullable();
            $table->date('datafaturav')->nullable();
            $table->text('obs')->nullable();
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
        Schema::dropIfExists('computadors');
    }
}
