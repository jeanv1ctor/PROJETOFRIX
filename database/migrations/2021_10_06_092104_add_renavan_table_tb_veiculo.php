<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRenavanTableTbVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


     /** MIGRATION PARA ADICIONAR A COLUNA RENAVAN DA TB_VEICULO */
    public function up()
    {
        Schema::table('tb_veiculo', function (Blueprint $table) {
            $table->string('renavan') // Nome da coluna
            ->after('chassi'); // 
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
            $table->dropColumn('renavan');
        });
    }
}
