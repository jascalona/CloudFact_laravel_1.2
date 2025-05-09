<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lgenal extends Model
{
    use HasFactory;
    public $timestamps = false;

    //protected $table = 'nametable';

    protected $fillable = [
        'cliente',
        'rif',
        'serial',
        'model',
        'location',
        'date',
        'cont_ante_bn',
        'cont_actu_bn',
        'volum_bn',
        'AMCV_bn',
        'cont_ante_color',
        'cont_actu_color',
        'volum_color',
        'AMCV_color',
        'cont_ante_scan_images',
        'cont_actu_scan_images',
        'cont_ante_scan_jobs',
        'cont_actu_scan_jobs'   
    ];

}