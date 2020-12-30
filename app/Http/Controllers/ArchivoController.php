<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archivo;
use App\Exports\ArchivoExport;
use Excel;
use App\Imports\ArchivoImport;

class ArchivoController extends Controller
{
    public function addArchivo(){
        $archivos =[
            ["establecimiento"=>"Sonesta","clasificacion"=>"Sonesta","categoria"=>"Sonesta","habitaciones"=>"50",
            "plazas"=>"50","fecha"=>"2020/10/25","checkins"=>"5","checkouts"=>"5","pernoctaciones"=>"5","nacionales"=>"6",
            "extranjeros"=>"8","habitaciones_ocupadas"=>"30","habitaciones_disponibles"=>"6","tipo_tarifa"=>"sonesta", 
            "tarifa_promedio"=>"5.5","tar_per"=>"6.5","ventas_netas"=>"9.6","porcentaje_ocupacion"=>"50.3",
            "revpar"=>"6.5","empleados_temporales"=>"5","estado"=>"Sonesta","opciones"=>"Sonesta"]
        ];
        Archivo::insert($archivos);
        return "Records are inserted";
    }

    public function exportIntoExcel(){
        return Excel::download(new ArchivoExport,'sonestalist.xlsx');
    }
    public function exportIntoCSV(){
        return Excel::download(new ArchivoExport,'sonestalist.csv');
    }

    public function importForm(){
        return view("import-form");
    }

    public function import(Request $request){
        Excel::import(new ArchivoImport,$request->file);
        return "Records are imported succesfully";
    }
    
}
