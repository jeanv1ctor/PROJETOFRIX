<?php

namespace App\Models;


//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tb_veiculo extends Model
{
    
    //use HasFactory;
    public $table = "tb_veiculo";
    protected $fillable = ['numero_veiculo', 'placa', 'descricao', 'marca', 'modelo',
    'chassi', 'renavan','eixo','autonomia', 'ano', 'fabricacao'];
    
}
