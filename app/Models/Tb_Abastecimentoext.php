<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tb_Abastecimentoext extends Model
{
    public $table = "tb_abastecimentoext";
    protected $fillable = ['numero_veiculo', 'quantidade_abastecida', 'tipo_combustivel', 'km', 'carga', 'motorista','num_nota', 'valor_nota', 'nome_posto'];


}
