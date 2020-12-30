<?php

namespace App\Imports;

use App\Models\Archivo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ArchivoImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Archivo([
            'establecimiento' => $row['establecimiento'],
            'clasificacion' => $row['clasificacion'],
            'categoria' => $row['categoria'],
            'habitaciones' => $row['habitaciones'],
            'plazas' => $row['plazas'],
            'fecha' => $row['fecha'],
            'checkins' => $row['checkins'],
            'checkouts' => $row['checkouts'],
            'pernoctaciones' => $row['pernoctaciones'],
            'nacionales' => $row['nacionales'],
            'extranjeros' => $row['extranjeros'],
            'habitaciones_ocupadas' => $row['habitaciones_ocupadas'],
            'habitaciones_disponibles' => $row['habitaciones_disponibles'],
            'tipo_tarifa' => $row['tipo_tarifa'],
            'tarifa_promedio' => $row['tarifa_promedio'],
            'tar_per' => $row['tar_per'],
            'ventas_netas' => $row['ventas_netas'],
            'porcentaje_ocupacion' => $row['porcentaje_ocupacion'],
            'revpar' => $row['revpar'],
            'empleados_temporales' => $row['empleados_temporales'],
            'estado' => $row['estado'],
            'opciones' => $row['opciones'],
            ]);
    }
}
