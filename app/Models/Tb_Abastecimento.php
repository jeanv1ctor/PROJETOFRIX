<?php

namespace App\Models;


//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tb_abastecimento extends Model
{
    
    //use HasFactory;
    public $table = "tb_abastecimento";
    protected $fillable = ['num_caminhao', 'litros', 'km'];
    
}
