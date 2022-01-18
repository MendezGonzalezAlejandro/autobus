<?php

namespace App\Models\Reservacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservacionModel extends Model{
    use HasFactory;

    protected $table = 'reservacion';
    protected $primarykey = 'idreservacion';
    public $timestamps = false;

    protected $fillable = ['idreservacion','nombre', 'apellido','asiento'];
}


