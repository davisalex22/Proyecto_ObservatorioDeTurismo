<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hoteles;
use RealRashid\SweetAlert\Facades\Alert;
class GraficasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $hoteles = Hoteles::all(); 
        $variableX =[];      
        $variableY =[];
        $varGrafica = [];
        $dateInicio = '';   
        $dateFin = '';
        $hotelGrafica = '';
        $varGrafica = '';
        $tipoGrafica = '';
        $variableY =[]; 
        $variableY1 =[]; 
        $variableY2 =[]; 
        $value1 = '';
        $value2 = ''; 
        $value3 = '';
        $numV = ''; 
        return view('admin.graficas')->with('hoteles',$hoteles)
                                     ->with('dateInicio',$dateInicio)
                                     ->with('dateFin',$dateFin)
                                     ->with('hotelGrafica',$hotelGrafica)
                                     ->with('variableX',$variableX)
                                     ->with('variableY',$variableY)
                                     ->with('variableY',$variableY)
                                     ->with('value1',$value1)
                                     ->with('variableY1',$variableY1)
                                     ->with('value2',$value2)
                                     ->with('variableY2',$variableY2)
                                     ->with('value3',$value3)
                                     ->with('numV',$numV)
                                     ->with('varGrafica',$varGrafica)
                                     ->with('tipoGrafica',$tipoGrafica);
    }

    public function filtroGrafica(Request $request){ 
        // Declaracion de variables
            $varGrafica ="";
            $variableX =[];
            $variableY =[];   
            $variableY1 =[];
            $variableY2 =[];  
            $value3 = ''; 
            $value1 = '';
            $value2 = '';  
            $aniosBd = DB::select("SELECT DISTINCT year(fecha) AS years FROM historial");
            $hoteles = Hoteles::all();  
            $dateInicio = $request -> get('dateInicio');   
            $dateFin = $request -> get('dateFin');
            $hotelGrafica = $request -> get('hotelGrafica');
            $varArrayGrafica = $request -> get('varGrafica');
            $tipoGrafica = $request -> get('tipoGrafica');
            $numV = sizeof($varArrayGrafica);  

        // Calculo de varias variables
            if (sizeof($varArrayGrafica) == 1): //checkbox = 1
                $varGrafica = $varArrayGrafica[0];
            elseif (sizeof($varArrayGrafica) == 2): //checkbox = 2
                $varGrafica ="";
                for($i = 0; $i < sizeof($varArrayGrafica); $i++){ 
                    $varGrafica = $varGrafica.$varArrayGrafica[$i].',';                   
                }                
                $varGrafica =substr($varGrafica, 0, -1);
                //dd($varGrafica);
            elseif (sizeof($varArrayGrafica) == 3): //checkbox = 3
                $varGrafica ="";
                for($i = 0; $i < sizeof($varArrayGrafica); $i++){ 
                    $varGrafica = $varGrafica.$varArrayGrafica[$i].',';                   
                }                
                $varGrafica =substr($varGrafica, 0, -1);
               // dd($varGrafica);
            elseif (sizeof($varArrayGrafica) > 3):
                Alert::error('Máximo permitido de 3 variables');
                return view('admin.graficas')->with('hoteles',$hoteles)
                                             ->with('aniosBd',$aniosBd)
                                             ->with('dateInicio',$dateInicio)
                                             ->with('dateFin',$dateFin)
                                             ->with('hotelGrafica',$hotelGrafica)
                                             ->with('variableX',$variableX)
                                             ->with('variableY',$variableY)
                                             ->with('value1',$value1)
                                             ->with('variableY1',$variableY1)
                                             ->with('value2',$value2)
                                             ->with('variableY2',$variableY2)
                                             ->with('value3',$value3)
                                             ->with('numV',$numV)
                                             ->with('varGrafica',$varGrafica)
                                             ->with('tipoGrafica',$tipoGrafica);
            endif;  
            $varX = DB::select("SELECT fecha  FROM historial e, hotel h WHERE e.fecha BETWEEN '$dateInicio' AND '$dateFin' AND e.Hotel_idHotel = h.idHotel AND h.nombre_hotel = '$hotelGrafica'");
            $varY = DB::select("SELECT  $varGrafica FROM historial e, hotel h WHERE e.fecha BETWEEN '$dateInicio' AND '$dateFin' AND e.Hotel_idHotel = h.idHotel AND h.nombre_hotel = '$hotelGrafica'");            
            $variableX =[];
            //dd($varX);
            for($i = 0; $i < sizeof($varX); $i++){
                array_push($variableX, $varX[$i]->fecha);
            }
            // Calculo de varias variables
            if (sizeof($varArrayGrafica) == 1): //checkbox = 1   
                for($i = 0; $i < sizeof($varY); $i++){
                    array_push($variableY, $varY[$i]->$varGrafica );
                }
                return view('admin.graficas')->with('hoteles',$hoteles)
                                             ->with('aniosBd',$aniosBd)
                                             ->with('dateInicio',$dateInicio)
                                             ->with('dateFin',$dateFin)
                                             ->with('hotelGrafica',$hotelGrafica)
                                             ->with('variableX',$variableX)
                                             ->with('variableY',$variableY)
                                             ->with('value1',$value1)
                                             ->with('variableY1',$variableY1)
                                             ->with('value2',$value2)
                                             ->with('variableY2',$variableY2)
                                             ->with('value3',$value3)
                                             ->with('numV',$numV)
                                             ->with('varGrafica',$varGrafica)
                                             ->with('tipoGrafica',$tipoGrafica);
            elseif (sizeof($varArrayGrafica) == 2): //checkbox = 2
                $value1 = $varArrayGrafica[0];
                $value2 = $varArrayGrafica[1];
               // dd($value2);
                for($i = 0; $i < sizeof($varY); $i++){
                    array_push($variableY, $varY[$i]-> $value1);
                    array_push($variableY1, $varY[$i]-> $value2);
                }
                //dd($variableY1);
                return view('admin.graficas')->with('hoteles',$hoteles)
                                             ->with('aniosBd',$aniosBd)
                                             ->with('dateInicio',$dateInicio)
                                             ->with('dateFin',$dateFin)
                                             ->with('hotelGrafica',$hotelGrafica)
                                             ->with('variableX',$variableX)
                                             ->with('variableY',$variableY)
                                             ->with('value1',$value1)
                                             ->with('variableY1',$variableY1)
                                             ->with('value2',$value2)
                                             ->with('variableY2',$variableY2)
                                             ->with('value3',$value3)
                                             ->with('varGrafica',$varGrafica)
                                             ->with('numV',$numV)
                                             ->with('tipoGrafica',$tipoGrafica);
            elseif (sizeof($varArrayGrafica) == 3): //checkbox = 3
                $value1 = $varArrayGrafica[0];
                $value2 = $varArrayGrafica[1];
                $value3 = $varArrayGrafica[2];
                for($i = 0; $i < sizeof($varY); $i++){
                    array_push($variableY, $varY[$i]-> $value1);
                    array_push($variableY1, $varY[$i]-> $value2);
                    array_push($variableY2, $varY[$i]-> $value3);
                }
                return view('admin.graficas')->with('hoteles',$hoteles)
                                             ->with('aniosBd',$aniosBd)
                                             ->with('dateInicio',$dateInicio)
                                             ->with('dateFin',$dateFin)
                                             ->with('hotelGrafica',$hotelGrafica)
                                             ->with('variableX',$variableX)
                                             ->with('variableY',$variableY)
                                             ->with('value1',$value1)
                                             ->with('variableY1',$variableY1)
                                             ->with('value2',$value2)
                                             ->with('variableY2',$variableY2)
                                             ->with('value3',$value3)
                                             ->with('varGrafica',$varGrafica)
                                             ->with('numV',$numV)
                                             ->with('tipoGrafica',$tipoGrafica);
            endif;   
    }
}
