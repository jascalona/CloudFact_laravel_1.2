<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Park;
use App\Models\Lgenal;
use App\Models\Contact;
use App\Models\lgenals;
use App\Models\Alquilers;
use PhpParser\Node\Expr\AssignOp\Concat;
use App\Http\Controllers\CustomerRequest;


class ScreensController extends Controller
{
    /**
     * CRATION ROUTES SCREENS
     */

    public function Park()
    {
        $parks = Park::all();

        //return  $parks;
        return view("screens.park", compact("parks"));
    }
    
    public function lead()
    {

        $customers = alquilers::all();
        return view("screens.lead", compact("customers"));
    }

    public function Lgeneral()
    {
        //$table = "load_reading";
        $Lgenals = Lgenal::all();
        return view("screens.Lgeneral", compact("Lgenals"));
    }



    public function show($id)
    {
        $clienteL = alquilers::findOrFail($id);
        $load = lgenals::all();
        return view("layouts.LCustomer", compact("clienteL", "load"));
    }



    public function bill()
    {
        $customers = Customer::all();
        return view("screens.bill", compact("customers"));
    }

    public function install()
    {
        $customers = Customer::all();
        return view("screens.install", compact("customers"));
    }

    public function contact()
    {
        $customers = Customer::all();
        return view("screens.contact", compact("customers"));
    }

    public function new_contact()
    {
        return view("logic.new_contact");
    }

    public function contract()
    {
        $customers = Customer::all();
        $alquilers = Alquilers::all();
        return view("screens.contract", compact("customers", "alquilers"));
    }


    /**Method Edit */
    public function edit($id)
    {
        $cliente = Customer::findOrFail($id);
        return view("logic.VContact", compact("cliente"));
    }

    /**Method Update */
    public function update(Request $request, $id)
    {
       if (!empty($_POST['modificar'])) {
        if (!empty($_POST['rif']) and !empty($_POST['direct_f']) and !empty($_POST['city']) and !empty($_POST['estado'])
        and !empty($_POST['date_creation']) and !empty($_POST['p_contact']) and !empty($_POST['p_email']) and !empty($_POST['p_movil'])) {

            /**Modificar */
            $contact = Customer::findOrFail($id);
            $contact->rif = $request->rif;
            $contact->direct_f = $request->direct_f;
            $contact->city = $request->city;
            $contact->estado = $request->estado;
            $contact->date_creation = $request->date_creation;
            $contact->p_contact = $request->p_contact;
            $contact->p_email = $request->p_email;
            $contact->p_movil = $request->p_movil;
            $contact->save();

            return redirect()->route('contact')->with('success','El fue modificado con exito!');

        } else {
            echo '<script>alert("Los CAmpos Primarios no pueden quedar vacios!")</script>';
        }
        
    
    } else {
        echo '<script>alert("Error")</script>';
    }
       

      

    }

}
