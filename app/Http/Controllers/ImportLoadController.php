<?php

namespace App\Http\Controllers;

use App\Imports\DataLoad;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class ImportLoadController extends Controller
{
    public function form(){
        return view("screens.Lgeneral");
    }

    public function import(Request $request){
    
        $file = $request->file("file");
        Excel::import(new DataLoad, $file);

        /**SHOW ALERT FOR QUERY */
        return redirect()->back()->with('success','Los registros fueron cargados con Exito!');
        
    }
}
