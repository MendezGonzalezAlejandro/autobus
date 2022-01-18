<?php

namespace App\Http\Controllers\Reporte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

use App\Models\Autobus\AutobusModel;
use App\Models\Corrida\CorridaModel;
use App\Models\Chofer\ChoferModel;

class ReporteController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }


    public function vista(){
        return view('admin.reporte.reporte');  //muestra lo visual de autobus 
       }
      

       //Autobuses
    public function pdfAutobus(){
        $ver1 = AutobusModel::select('idAutobus','modelo','marca','placa','anio')
        ->get();
  
        $pdf = PDF::loadView('admin/reporte/pdfAutobus',['autobus'=>$ver1]);
        return $pdf->stream();
  
      }

      //Descargar reporte
    public function pdfAutobusD(){
        $ver1 = AutobusModel::select('idAutobus','modelo','marca','placa','anio')
        ->get();
        $pdf = PDF::loadView('admin/reporte/pdfAutobus',['autobus'=>$ver1]);
        return $pdf->download('autobus.pdf');
      }

      //Choferes
    public function pdfChofer(){
        $ver1 = ChoferModel::select('licencia','nombre','apellido1','apellido2','calle','colonia','dir_numero','numerotelefonico','idAutobus')
        ->get();
        $pdf = PDF::loadView('admin/reporte/pdfChofer',['chofer'=>$ver1]);
        return $pdf->stream();
  
      }

      //Descargar reporte
    public function pdfChoferD(){
        $ver1 = ChoferModel::select('licencia','nombre','apellido1','apellido2','calle','colonia','dir_numero','numerotelefonico','idAutobus')
        ->get();
        $pdf = PDF::loadView('admin/reporte/pdfChofer',['chofer'=>$ver1]);
        return $pdf->download('chofer.pdf');
      }
  
      
      //Corridas
    public function pdfCorrida(){
        $ver1 = CorridaModel::select('idcorrida','origen','destino','horaSalida','idAutobus','precio')
        ->get();
        $pdf = PDF::loadView('admin/reporte/pdfCorrida',['corrida'=>$ver1]);
        return $pdf->stream();
      }


      //Descargar reporte
    public function pdfCorridaD(){
        $ver1 = CorridaModel::select('idcorrida','origen','destino','horaSalida','idAutobus','precio')
        ->get();
        $pdf = PDF::loadView('admin/reporte/pdfCorrida',['corrida'=>$ver1]);
        return $pdf->download('corrida.pdf');
      }


}
