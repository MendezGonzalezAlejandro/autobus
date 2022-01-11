<?php

namespace App\Http\Controllers\Corrida;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Corrida\CorridaModel;
use App\Models\Autobus\AutobusModel;

class CorridaController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }



    public function corrida(){
        
        $autobus = AutobusModel::select('idAutobus')
        ->where('activo','1')
        ->get();
        return view('admin.corrida.Alta',  compact('autobus'));
       }
    
    
       public function altaCorrida(Request $p){
            $origen= $p->origen;
            $destino = $p->destino;
            $horaSalida = $p->horaSalida;
            $idAutobus = $p->idAutobus;
    
            CorridaModel::create([
                'origen' => $origen,
                'destino' => $destino,
                'horaSalida' => $horaSalida,
                'idAutobus' => $idAutobus
            ]);
/*
            $autobus = AutobusModel::select('idAutobus','activo')
            ->where ('idAutobus',$idAutobus)
            ->update([
            'activo' => '0',
            ]);
            */
                //nombre como aparece en la base de datos  => nombre de la variable que se creo
            return redirect()->to('mostrarCorrida');
       }

       
  

       public function mostrarCorrida(){
      $ver1 = CorridaModel::select('idcorrida','origen','destino','horaSalida','idAutobus')
      //->where('activo','1')
      ->get();
        return view('admin.corrida.Mostrar')->with('corrida',$ver1);
    }
/*
    public function editarChofer($id){
        $verU = ChoferModel::select('licencia','nombre','apellido1','apellido2','calle','colonia','dir_numero','numerotelefonico','idAutobus')
        ->where ('licencia',$id)
        ->first();
        return view('admin\chofer/editar')->with('chofer',$verU);
    }

    public function modificarChofer(Request $p1){

        $licencia = $p1->licencia;
        $nombre = $p1->nombre;
        $apellido1 = $p1->apellido1;
        $apellido2 = $p1->apellido2;
        $calle = $p1->calle;
        $colonia = $p1->colonia;
        $dir_numero = $p1->dir_numero;
        $numerotelefonico = $p1->numerotelefonico;
        $idAutobus = $p1->idAutobus;

        $verU = ChoferModel::select('licencia','nombre','apellido1','apellido2','calle','colonia','dir_numero','numerotelefonico','idAutobus')
        ->where ('licencia',$licencia)
        ->update([
            'nombre' => $nombre,
            'apellido1' => $apellido1,
            'apellido2' => $apellido2,
            'calle' => $calle,
            'colonia' => $colonia,
            'dir_numero' => $dir_numero,
            'numerotelefonico' => $numerotelefonico,
            'idAutobus' => $idAutobus
        ]);
        return redirect()->to('mostrarChofer');
    }
*/
    /*
//Ocultar el archivo en la vista
    public function bajaChofer($id){
        $verU = ChoferModel::select('licencia','activo')
        ->where ('licencia',$id)
        ->update([
            'activo' => '0',
        ]);
        return redirect()->to('mostrarChofer');
    }
*/
//Eliminar completamente el archivo


    public function eliminarCorrida($id){
        $verU = CorridaModel::select('idcorrida')
        ->where ('idcorrida',$id)
        ->delete();
        return redirect()->to('mostrarCorrida');
    }



}

