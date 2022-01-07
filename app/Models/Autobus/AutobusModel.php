<?php

namespace App\Models\Autobus;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutobusModel extends Model{
    use HasFactory;

    protected $table = 'autobus';
    protected $primarykey = 'idAutobus';
    public $timestamps = false;

    protected $fillable = ['idAutobus','modelo', 'marca', 'placa', 'anio','activo'];
}
