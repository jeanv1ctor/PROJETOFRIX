<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMotoristaTableTbVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /**ADICIONADO A COLUNA MOTORISTA NA TB_ABASTECIMENTO */
    public function up()
    {
        Schema::table('tb_abastecimento', function (Blueprint $table) {
            $table->string('motorista') // Nome da coluna
            ->after('carga'); // 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_abastecimento', function (Blueprint $table) {
            $table->dropColumn('motorista');
        });
    }
}
