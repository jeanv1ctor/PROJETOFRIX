<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrakmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_registrokm', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_veiculo');
            $table->float('quantidade_abastecida');
            $table->string('tipo_combustivel');
            $table->float('Kmsaida');
            $table->string('motorista');
            
            $table->integer('carga')->nullable();
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
        Schema::dropIfExists('Tb_Kmsaida');
    }
}
