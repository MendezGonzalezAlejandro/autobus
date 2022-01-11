<?php

namespace App\Models\Corrida;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorridaModel extends Model{
    use HasFactory;

    protected $table = 'corrida';
    protected $primarykey = 'idcorrida';
    public $timestamps = false;

    protected $fillable = ['idcorrida','origen', 'destino', 'horaSalida', 'activo','idAutobus'];
}
