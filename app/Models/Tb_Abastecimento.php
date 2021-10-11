<?php

namespace App\Models;


//use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\User;
use Illuminate\Database\Eloquent\Model;



class Tb_abastecimento extends Model
{
    
    //use HasFactory;
    public $table = "tb_abastecimento";
    protected $fillable = ['numero_veiculo', 'quantidade_abastecida', 'tipo_combustivel', 'km', 'carga', 'motorista','user_id'];



    public function user(){
        return $this->belongsto('App\User', 'user_id');
    }
}


    

