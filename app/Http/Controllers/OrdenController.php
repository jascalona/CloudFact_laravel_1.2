<?php

namespace App\Http\Controllers;

use App\Models\lgenals;
use App\Models\Ordens;
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

    public function create(Request $request, $id)
    {

        /**Nueva Instancia */
        $orden = new Ordens();

        $orden->n_contract = $request->post('n_contract');
        $orden->tipo_cambio = $request->post('tipo_cambio');
        $orden->name_c = $request->post('name_c');
        $orden->cliente = $request->post('cliente');
        $orden->rif = $request->post('rif');
        $orden->direct_f = $request->post('direct_f');
        $orden->city = $request->post('city');
        $orden->date_emi = $request->post('date_emi');
        $orden->mes = $request->post('mes');
        $orden->volum_bn = $request->post('volum_bn');
        $orden->volum_color = $request->post('volum_color');
        $orden->copi_minimo_bn = $request->post('copi_minimo_bn');
        $orden->copi_minimo_color = $request->post('copi_minimo_color');
        $orden->cargo_minimo = $request->post('cargo_minimo');
        $orden->mont_fact_bn = $request->post('mont_fact_bn');
        $orden->mont_fact_color = $request->post('mont_fact_color');
        $orden->base_imponible = $request->post('base_imponible');
        $orden->save();
        
        /**retorno en caso de que la vista funcione sin problemas */
        return redirect()->route('LCustomer',$id)->with('success','Su Orden fue generada con exito!');

    }

}
