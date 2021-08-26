<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCaminhao extends Model
{
    
    use HasFactory;
    protected $fillable = ['numero_caminhao', 'placa', 'descricao', 'modelo',
    'chassi', 'ano', 'fabricacao'];
    
}
