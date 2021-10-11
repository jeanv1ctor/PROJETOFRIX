<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_AsbastecimentoExt extends Model
{
    public $table = "tb_abastecimentoext";
    protected $fillable = ['numero_veiculo', 'quantidade_abastecida', 'tipo_combustivel', 'km', 'carga', 'motorista','num_nota', 'nome_posto'];



    public function user(){
        return $this->belongsto('App\User', 'user_id');
    }
}
