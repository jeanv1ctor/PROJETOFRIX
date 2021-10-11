<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAutonomiaTableTbVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /**ADICIONADO A COLUNA AUTONOMIA NA TB_VEICULO */
    public function up()
    {
        Schema::table('tb_veiculo', function (Blueprint $table) {
            $table->string('autonomia') // Nome da coluna
            ->after('eixo'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tb_veiculo', function (Blueprint $table) {
            $table->dropColumn('autonomia');
        });
    }
}
