<?php

namespace App\Http\Controllers;

use App\Models\Park;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\parks;

class ParkController extends Controller
{

   /**NEW DEVICE IN PARK */
   public function store(Request $request)
   {
      //Nuevas Instancia
      if (!empty($_POST['new_device'])) {
        if (!empty($_POST['rif']) and !empty($_POST['serial']) and !empty($_POST['model']) and !empty($_POST['location']) 
        and !empty($_POST['city']) and !empty($_POST['estado']) and !empty($_POST['p_contact']) and !empty($_POST['p_email']) 
        and !empty($_POST['p_movil']) and !empty($_POST['date_insta']) and !empty($_POST['n_port']) and !empty($_POST['cont_insta_bn']) 
        and !empty($_POST['cont_insta_color']) ) {
         
           /**INstancia de modelo */
           $install = new Park();

           $install->cliente = $request->post('cliente');
           $install->rif = $request->post('rif');
           $install->serial = $request->post('serial');
           $install->model = $request->post('model');
           $install->location = $request->post('location');
           $install->city = $request->post('city');
           $install->estado = $request->post('estado');
           $install->p_contact =$request->post('p_contact');
           $install->p_email = $request->post('p_email');
           $install->p_movil = $request->post('p_movil');
           $install->date_insta = $request->post('date_insta');
           $install->n_port = $request->post('n_port');
           $install->cont_insta_bn = $request->post('cont_insta_bn');
           $install->cont_insta_color = $request->post('cont_insta_color');
           $install->obser = $request->post('obser');

           $install->save();

           /**retrno en caso de realizar la carga */
         return redirect()->route('.park')->with('success','El equipo fue agregado con Exito!');


        } else {
         return redirect()->route('install')->with('warning', '¡Lo sentimos, no pudimos cargar tu registro! Asegurese de llenar todos los Campos!');
      }
        
      } else {
         # code...
      }

   }


   /**Metodo show-edit */
   public function edit($id)
   {
      $device = parks::findOrFail($id);
      return view("logic.Upark", compact("device"));
   }


   /**Metodo Update */
   public function update(Request $request, $id)
   {

      if (!empty($_POST['edit_park'])) {

         if (
            !empty($_POST['rif']) and !empty($_POST['serial']) and !empty($_POST['model']) and !empty($_POST['location'])
            and !empty($_POST['city']) and !empty($_POST['estado']) and !empty($_POST['date_insta'])
         ) {

            /**Modificacion */
            $device = parks::findOrFail($id);
            $device->rif = $request->rif;
            $device->serial = $request->serial;
            $device->model = $request->model;
            $device->location = $request->location;
            $device->city = $request->city;
            $device->estado = $request->estado;
            $device->date_insta = $request->date_insta;
            $device->p_contact = $request->p_contact;
            $device->p_email = $request->p_email;
            $device->p_movil = $request->p_movil;
            $device->n_port = $request->n_port;
            $device->cont_insta_bn = $request->cont_insta_bn;
            $device->cont_insta_color = $request->cont_insta_color;
            $device->obser = $request->obser;
            $device->save();
            return redirect()->route('.park')->with('success', 'El Registro se fue modificado con exito!');


         } else {
            return redirect()->route('Upark.edit', $id)->with('warning', 'Los Campos primarios no pueden quedar vacios. ¡Por favor inserte los datos solicitados!');
         }




      } else {
         echo '<script>alert("error")</script>';

      }




   }

}
