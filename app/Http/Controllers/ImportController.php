<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use App\Models\Lgenal;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;



class ImportController extends Controller
{

    public function form()
    {
        return view("screens.Lgeneral");
    }

    public function import(Request $request)
    {
        /**validation */
        $file = $request->file('file');
        Excel::import(new DataImport, $file);

        /**SHOW ALERT FOR QUERY */
        return redirect()->back()->with('success','Los registros fueron cargados con Exito!');

    }
}
