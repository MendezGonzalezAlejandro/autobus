<?php

namespace App\Http\Controllers\DetalleReservacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Corrida\CorridaModel;
use App\Models\DetalleReservacion;
use App\Models\Reservacion;
use PDF;

use App\Models\Fecha\FechaModel;

use DB;

use App\Models\DetalleReservacion\DetalleReservacionModel;

class DetalleReservacionController extends Controller{

    public function fecha(){  
        return view('welcome');
      }
   
  public function prueba(Request $p4){ 
    $origen1 = $p4->origen1;
    $destino1 = $p4->destino1;
    $dia1 = $p4->dia1;

    $ver2 = CorridaModel::select('idcorrida','origen','destino','horaSalida','precio')
    ->where('origen','like',$origen1)
    ->where('destino','like',$destino1) 
    ->get();

    $tamano = count($ver2);
    if ($tamano<1){
        return view('welcome');
    }
    FechaModel::create([
        'fecha'=>$dia1
    ]);
    return view('admin.detalleReservacion.Mostrar')->with('reservacion',$ver2)->with('dia1',$dia1);        
}


/*
    public function editarF($id,$dia1){
        $ver2 = CorridaModel::select('idcorrida','origen','destino','horaSalida','precio')
        ->where ('idcorrida',$id)
        ->first();

        $ver3 = DetalleReservacionModel::select('dia1')
        ->where ('dia1','like',$dia1)
        ->first();
        return view('admin.detalleReservacion.formulario')->with('detalle',$ver2)->with('dia1',$ver3);
        }
*/

        
        public function editarF($id){
        $ver2 = CorridaModel::select('idcorrida','origen','destino','horaSalida','precio')
        ->where ('idcorrida',$id)
        ->first();
        return view('admin.detalleReservacion.formulario')->with('detalle',$ver2);
        }
        

        
    public function registrarV(Request $p){
        
        $nombre= $p->nombre;
        $apellido = $p->apellido;
        $asiento= $p->asiento;
        $idcorrida= $p->idcorrida;

        DetalleReservacionModel::create([
            'nombre'=> $nombre,
            'apellido'=> $apellido,
            'asiento'=> $asiento,
            'idcorrida'=> $idcorrida
        ]);
        return redirect()->to('/');
    }


        public function formulario(){
            return view('admin.detalleReservacion.formulario');  
        }
       
    //Boleto
    public function pdfVenta(){
        $ver1 = DetalleReservacionModel::select('idDetalle','nombre','apellido','asiento','idcorrida')
        ->get();
        $pdf = PDF::loadView('admin/detalleReservacion/boleto',['venta'=>$ver1]);
        return $pdf->stream();
  
      }

      //Descargar reporte
    public function pdfVentaD(){
        $ver1 = DetalleReservacionModel::select('idDetalle','nombre','apellido','asiento','idcorrida')
        ->get();
        $pdf = PDF::loadView('admin/detalleReservacion/boleto',['venta'=>$ver1]);
        return $pdf->download('chofer.pdf');
      }

/*
        public function modificarVenta(Request $p1){

            $idDetalle = $p1->idDetalle;
            $dia1 = $p1->dia1;
            $asiento = $p1->asiento;
            $activo = $p1->activo;
       
    
            $verU = DetalleReservacionModel::select('idDetalle','asiento','activo')
            ->where ('idDetalle',$idDetalle)
            ->update([
                'asiento' => $asiento,
                'activo' => '0',
                
            ]);
            return view('welcome');
        }
*/


  

}
