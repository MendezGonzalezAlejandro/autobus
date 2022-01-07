<?php

namespace App\Models\Chofer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoferModel extends Model{
    use HasFactory;

    protected $table = 'chofer';
    protected $primarykey = 'licencia';
    public $timestamps = false;

    protected $fillable = ['licencia','nombre', 'apellido1', 'apellido2', 'calle','colonia','dir_numero','numerotelefonico','idAutobus','activo'];
}
