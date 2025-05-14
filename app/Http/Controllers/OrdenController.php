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

        /**Select mes */
        $row_mes = lgenals::select('mes')->distinct()->get();


        return view("screens.orden", compact("clienteL", "load", "row_mes"));
    }

    public function create(Request $request)
    {
        
    }

}
