<?php

namespace App\Http\Controllers\Autobus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Autobus\AutobusModel;

class AutobusController extends Controller{
    //

    public function __construct(){
        $this->middleware('auth');
    }

    public function alta(){
    return view('admin/Alta');  //muestra lo visual de autobus 
   }


   public function altaP(Request $p){
        $modelo = $p->modelo;
        $marca = $p->marca;
        $placa = $p->placa;
        $anio = $p->anio;

        AutobusModel::create([
            'modelo' => $modelo,
            'marca' => $marca,
            'placa' => $placa,
            'anio' => $anio
        ]);
            //nombre como aparece en la base de datos  => nombre de la variable que se creo
        

        return redirect()->to('Mostrar');
        //para que nos regrese 
   }
  
    public function mostrar(){
        //$ver1 = AutobusModel::all();  //Mostrar todos
      $ver1 = AutobusModel::select('idAutobus','modelo','marca','placa','anio')
      //->where('activo','1')
      ->get();
        //->where('tipo','1')
        // ->first();  //te muestra el primero que encuentra

        return view('admin/Mostrar')->with('autobus',$ver1);
    }
    
    public function editarU($id){
        $verU = AutobusModel::select('idAutobus','modelo','marca','placa','anio')
        ->where ('idAutobus',$id)
        ->first();

        return view('admin/editar')->with('autobus',$verU);
    }

    public function actU(Request $p1){

        $idAutobus = $p1->idAutobus;
        $modelo = $p1->modelo;
        $marca = $p1->marca;
        $placa = $p1->placa;
        $anio = $p1->anio;

        $verU = AutobusModel::select('idAutobus','modelo','marca','placa','anio')
        ->where ('idAutobus',$idAutobus)
        ->update([
            'modelo' => $modelo,
            'marca' => $marca,
            'placa' => $placa,
            'anio' => $anio
        ]);
        return redirect()->to('Mostrar');
    }

  /*  
    public function baja($id){

       // $id = $p3->idAutobus;

        $verU = AutobusModel::select('idAutobus','activo')
        ->where ('idAutobus',$id)
        ->update([
            'activo' => '0',
        ]);
        return redirect()->to('Mostrar');
    }
*/

    //Eliminar completamente el archivo

    public function baja($id){
        $verU = AutobusModel::select('idAutobus')
        ->where ('idAutobus',$id)
        ->delete();
        return redirect()->to('Mostrar');
    }

}
