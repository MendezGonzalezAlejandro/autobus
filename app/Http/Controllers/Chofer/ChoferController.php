<?php

namespace App\Http\Controllers\Chofer;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Chofer\ChoferModel;

use App\Models\Autobus\AutobusModel;

//use App\Http\Controllers\Autobus\AutobusController;

class ChoferController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function chofer(){
        $autobus = AutobusModel::select('idAutobus')
        ->where('activo','1')
        ->get();
        return view('admin.chofer.Alta', compact('autobus'));
       // return view('admin\chofer/Alta');  //muestra lo visual de autobus 
       }
    
    
       public function altaC(Request $p){
            $licencia = $p->licencia;
            $nombre = $p->nombre;
            $apellido1 = $p->apellido1;
            $apellido2 = $p->apellido2;
            $calle = $p->calle;
            $colonia = $p->colonia;
            $dir_numero = $p->dir_numero;
            $numerotelefonico = $p->numerotelefonico;
            $idAutobus = $p->idAutobus;
    
            ChoferModel::create([
                'licencia' => $licencia,
                'nombre' => $nombre,
                'apellido1' => $apellido1,
                'apellido2' => $apellido2,
                'calle' => $calle,
                'colonia' => $colonia,
                'dir_numero' => $dir_numero,
                'numerotelefonico' => $numerotelefonico,
                'idAutobus' => $idAutobus
            ]);
                //nombre como aparece en la base de datos  => nombre de la variable que se creo
            return redirect()->to('mostrarChofer');
       }

       public function mostrarChofer(){
      $ver1 = ChoferModel::select('licencia','nombre','apellido1','apellido2','calle','colonia','dir_numero','numerotelefonico','idAutobus')
      ->where('activo','1')
      ->get();
        return view('admin\chofer/Mostrar')->with('chofer',$ver1);
    }

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

    
    public function bajaChofer($id){
        $verU = AutobusModel::select('licencia','activo')
        ->where ('licencia',$id)
        ->update([
            'activo' => '0',
        ]);
        return redirect()->to('mostrarChofer');
    }


    
}
