<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tb_Kmsaida extends Model
{
    
    //use HasFactory;
    public $table = "tb_Kmsaida";
    protected $fillable = ['numero_veiculo', 'km_saida', 'carga', 'motorista','user_id'];
}