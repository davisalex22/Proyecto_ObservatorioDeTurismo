<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Archivo extends Model
{
    use HasFactory;

    protected $table = "archivos";

    protected $fillable =  ['establecimiento','clasificacion','categoria','habitaciones','plazas','fecha','checkins','checkouts',
                            'pernoctaciones','nacionales','extranjeros','habitaciones_ocupadas','habitaciones_disponibles',
                            'tipo_tarifa','tarifa_promedio','tar_per','ventas_netas','porcentaje_ocupacion','revpar',
                            'empleados_temporales','estado','opciones'];

    public static function getArchivo(){
        $records = DB::table('archivos')->select('id','establecimiento','clasificacion','categoria','habitaciones','plazas','fecha',
                                                 'checkins','checkouts','pernoctaciones','nacionales','extranjeros','habitacionesOcupadas',
                                                 'habitacionesDisponibles','tipoTarifa','tarifaPromedio','tarPer','ventasNetas',
                                                 'porcentajeOcupacion','revpar','empleadosTemporales','estado','opciones')->get()->toArray();
        return $records;
    }
}
