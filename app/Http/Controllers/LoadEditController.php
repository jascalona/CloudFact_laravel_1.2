<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\lgenals;

class LoadEditController extends Controller
{
    public function edit($id){
        $editLoad = lgenals::findOrFail( $id );
        return view("logic.LoadEdit", compact("editLoad"));

    }

    public function update(Request $request, $id){
        
    }

}
