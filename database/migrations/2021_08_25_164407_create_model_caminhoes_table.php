<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelCaminhoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_veiculo', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_veiculo');
            $table->string('placa');
            $table->string('descricao');
            $table->string('marca');
            $table->string('modelo');
            $table->string('chassi');
            $table->string('eixo');
            $table->integer('ano');
            $table->integer('fabricacao');
            $table->rememberToken();
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
        Schema::dropIfExists('tb_veiculo');
    }
}
