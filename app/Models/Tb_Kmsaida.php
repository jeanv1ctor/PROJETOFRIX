<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tb_Kmsaida extends Model
{
    
    //use HasFactory;
    public $table = "tb_Kmsaida";
    protected $fillable = ['numero_veiculo', 'quantidade_abastecida', 'tipo_combustivel', 'Kmsaida', 'carga', 'motorista','user_id'];
}