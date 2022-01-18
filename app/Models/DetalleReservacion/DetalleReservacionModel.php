<?php

namespace App\Models\DetalleReservacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleReservacionModel extends Model
{
    use HasFactory;

    protected $table = 'detallereservacion';
    protected $primarykey = 'idDetalle';
    public $timestamps = false;

    protected $fillable = ['idDetalle','nombre','apellido','asiento','activo','idcorrida','idfecha'];
}
