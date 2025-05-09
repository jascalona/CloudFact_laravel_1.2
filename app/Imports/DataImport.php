<?php

namespace App\Imports;

use App\Models\Lgenal;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Carbon\Carbon;

class DataImport implements ToCollection, WithHeadingRow, WithValidation
{

    public function collection(Collection $rows)
    {

        $DateActual = now()->format("y-m-d");

        $mesYAnio = 100;
        

        foreach ($rows as $row) {
            Lgenal::create([
                'cliente' => $row['cliente'],
                'rif' => $row['rif'],
                'serial' => $row['serial'],
                'model' => $row['model'],
                'location' => $row['location'],
                'date' => $DateActual,
                'mes' => $mesYAnio,
                'cont_ante_bn' => $row['cont_ante_bn'],
                'cont_actu_bn' => $row['cont_actu_bn'],
                'volum_bn' => $row['volum_bn'],
                'AMCV_bn' => $row['amcv_bn'],
                'cont_ante_color' => $row['cont_ante_color'],
                'cont_actu_color' => $row['cont_actu_color'],
                'volum_color' => $row['volum_color'],
                'AMCV_color' => $row['amcv_color'],
                'cont_ante_scan_images' => $row['cont_ante_scan_images'],
                'cont_actu_scan_images' => $row['cont_actu_scan_images'],
                'volum_scan_images' => $row['volum_scan_images'],
                'cont_ante_scan_jobs' => $row['cont_ante_scan_jobs'],
                'cont_actu_scan_jobs' => $row['cont_actu_scan_jobs'],
                'volum_scan_jobs' => $mesYAnio,
            ]);
        }

    }

    public function rules(): array
    {
        return [
            '*.cont_ante_bn' => [
                'integer',
                'required'
            ],
            '*.cont_actu_bn' => [
                'integer',
                'required'
            ]
        ];
    }
}