<?php

namespace App\Models;


//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tb_caminhao extends Model
{
    
    //use HasFactory;
    public $table = "tb_caminhao";
    protected $fillable = ['numero_caminhao', 'placa', 'descricao', 'marca', 'modelo',
    'chassi', 'ano', 'fabricacao'];
    
}
