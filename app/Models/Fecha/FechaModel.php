<?php

namespace App\Models\Fecha;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FechaModel extends Model{
    use HasFactory;

    protected $table = 'fecha';
    protected $primarykey = 'idfecha';
    public $timestamps = false;

    protected $fillable = ['idfecha','fecha'];
}
