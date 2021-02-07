<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hoteles;
use RealRashid\SweetAlert\Facades\Alert;

class ComparativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aniosBd = DB::select("SELECT DISTINCT year(fecha) AS years FROM historial");
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
        $aniosBd = DB::select("SELECT DISTINCT year(fecha) AS years FROM historial");
        return view('admin.comparativa')->with('hoteles',$hoteles)
                                        ->with('aniosBd',$aniosBd)
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
    public function getAnios(Request $request,$id){
        if($request->ajax()){
          
            $anios = DB::select("SELECT DISTINCT year(fecha) AS fecha FROM historial e WHERE e.Hotel_idHotel = $id ORDER BY fecha");
            //$anios = Historial::anios($id+1);
            //dd($anios);
            return response()->json($anios);
        }
    }
    
    public function getMeses(Request $request,$id){
        if($request->ajax()){
          
            $anios = DB::select("SELECT DISTINCT month(fecha) AS mes FROM historial e WHERE year(fecha) = $id  ORDER BY mes");
            //$anios = Historial::anios($id+1);
            //dd($anios);
            return response()->json($anios);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
