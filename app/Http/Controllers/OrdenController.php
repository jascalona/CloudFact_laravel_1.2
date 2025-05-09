<?php

namespace App\Http\Controllers;

use App\Models\lgenals;
use Illuminate\Http\Request;
use App\Models\Alquilers;
use Carbon\Carbon;

class OrdenController extends Controller
{
    public function edit($id)
    {
        $clienteL = alquilers::findOrFail($id);
        $load = lgenals::orderBy('date', 'desc')->get();
        
        return view("screens.orden", compact("clienteL", "load"));
    }


}
