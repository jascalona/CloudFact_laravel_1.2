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


    /**Funtion create new contract */
    public function create(){

        if (!empty($_POST['btn-a'])) {
            
            /**DATOS VALIDACION DATOS DE CLIENTE */
            if (!empty($_POST['name_c']) and !empty($_POST['cliente']) and !empty($_POST['date_init_contract']) and !empty($_POST['date_close_contract']) 
                
                #02
                and !empty($_POST['rif']) and !empty($_POST['n_contract']) and !empty($_POST['d_contract']) and !empty($_POST['tipo_c']) and !empty($_POST['vendedor']) and !empty($_POST['administrador_01'])
            
                #PRECIOS
                and !empty($_POST['P_CLICK_BN_USD']) and !empty($_POST['P_CLICK_COLOR_USD'])  and !empty($_POST['copi_minimo_bn']) and !empty($_POST['copi_minimo_color'])
                and !empty($_POST['PCM']) and !empty($_POST['label'])
            

            /**VALIDACION INFORMACION DETALLADA */
                and !empty($_POST['moneda']) and !empty($_POST['tipo_cambio'])
              
                ) {
                
                    echo  '<script>alert("lISTO LA VALIDACION !")</script>';

            } else {
                return redirect()->route('Alquiler.store', )->with('warning', 'Los Campos primarios no pueden quedar vacios. ¡Por favor inserte los datos solicitados!');
            }
            


        } else {
            echo  '<script>alert("Ha Ocurrido un Error al conectar con el servidor!")</script>';
        }
        
    }

}
