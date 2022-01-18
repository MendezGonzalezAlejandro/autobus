<?php

namespace App\Http\Controllers\Reservacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Corrida\CorridaModel;
use App\Models\Reservacion\ReservacionModel;


class ReservacionController extends Controller{

   // $ver1 = CorridaModel::select('idcorrida','origen','destino','horaSalida','idAutobus')
    public function reservacion(){

        $destinoR = CorridaModel::select('idcorrida','origen','destino','horaSalida','idAutobus')
        ->first();
        //->get();
        return view('admin.reservacion.Alta',  compact('destinoR'));
        //return view('admin.reservacion.Alta');
    }


    public function registrarV(Request $p){
        $nombre= $p->nombre;
        $apellido = $p->apellido;
        $asiento= $p->asiento;

        ReservacionModel::create([
            'nombre'=> $nombre,
            'apellido'=> $apellido,
            'asiento'=> $asiento
        ]);
        return redirect()->to('/');
    }


  
}
