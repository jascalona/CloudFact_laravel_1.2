<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Alquilers;
use App\Models\Customer;
use App\Models\lgenals;

class AlquilerController extends Controller
{
    public function store(){
        $customers = Customer::all();

        return view("logic.Alquiler", compact("customers"));
    }


    public function edit($id){
        $alquiler = Alquilers::findOrFail($id);
        return view("logic.edit_alquiler", compact("alquiler"));
    } 


}
