<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAsbastecimentoExtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_abastecimentoext', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_veiculo');
            $table->float('quantidade_abastecida');
            $table->string('tipo_combustivel');
            $table->float('km');
            $table->integer('carga')->nullable();
            $table->integer('num_nota');
            $table->float('valor_nota');
            $table->string('nome_posto');
            $table->string('motorista');
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
        Schema::dropIfExists('tb_asbastecimentoext');
    }
}
