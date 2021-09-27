<?php

namespace App\Models;


//use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\User;
use Illuminate\Database\Eloquent\Model;



class Tb_abastecimento extends Model
{
    
    //use HasFactory;
    public $table = "tb_abastecimento";
    protected $fillable = ['numero_caminhao', 'quantidade_abastecida', 'tipo_combustivel', 'km', 'carga'];

}
    

