<?php

use App\Http\Controllers\ImportController;
use App\Http\Controllers\ParkController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrdenController;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\CustomerController::class, 'index'])->name('.dashboard');

//Route::get('home', [App\Http\Controllers\HomeController::class,'index'])->name('home');

/**
 * Declaracion de rutas
 */

  /**ruta park */
 Route::get('/park', [App\Http\Controllers\ScreensController::class, 'park'])->name('.park');
 
 Route::resource('/parks', App\Http\Controllers\ScreensController::class)->names('park');

 Route::resource('/customers',CustomerController::class)->names('customer');

 Route::PATCH('/Upark{edit}', [App\Http\Controllers\ParkController::class, 'edit'])->name('Upark.edit');

 Route::put('/Upark{edit}', [App\Http\Controllers\ParkController::class,'update'])->name('Upark.update');

/**new device */
Route::post('install', [App\Http\Controllers\ParkController::class,'store'])->name('park.store');


 /**ruta lecturas */
 Route::get('/lead', [App\Http\Controllers\ScreensController::class,'lead'])->name('.lead');

 /**edicion de lecturas */
Route::get('LoadEdit{edit}', [App\Http\Controllers\LoadEditController::class,'edit'])->name('LoadEdit.edit');


/**RUTAS PARA LA IMPORTACION DE LECTURAS */
Route::get('Lgeneral', [App\Http\Controllers\ImportLoadController::class,'form'])->name('');

Route::post('Lgeneral', [App\Http\Controllers\ImportLoadController::class,'import'])->name('');


 /**ruta lectura general */
Route::get('/Lgeneral', [App\Http\Controllers\ScreensController::class,'Lgeneral'])->name(  'Lgeneral');
 
Route::resource('Lgenals', App\Http\Controllers\ScreensController::class)->names('Lgenal');

//Route::get('/LCustomer', [App\Http\Controllers\ScreensController::class,'LCustomer'])->name('LCustomer');

Route::get('/LCustomer{show}', [App\Http\Controllers\ScreensController::class,'show'])->name('LCustomer');


/**ruta contact */
Route::get('/contact', [App\Http\Controllers\ScreensController::class,'contact'])->name('contact');

Route::get('new_contact', [App\Http\Controllers\ScreensController::class,'new_contact'])->name('new_contact');


/**ruta segun su id */
Route::get('/VContact{cliente}', [App\Http\Controllers\ScreensController::class,'edit'])->name('VContact.edit');

Route::put('/VContact{cliente}', [App\Http\Controllers\ScreensController::class,'update'])->name('VContact.update');

Route::post('new_contact', [App\Http\Controllers\CustomerController::class,'store'])->name('new_contact.store');



/**ruta contrac */
Route::get('contract', [App\Http\Controllers\ScreensController::class,'contract'])->name('contract');



/**ruta install device new park */
Route::get('/install', [App\Http\Controllers\ScreensController::class,'install'])->name('install');

Route::post('install', [App\Http\Controllers\ParkController::class,'store'])->name('install.store');


/**NEW CONTRACT ALQUILER */
Route::get('Alquiler', [App\Http\Controllers\AlquilerController::class,'store'])->name('Alquiler.store');

Route::post('Alquiler', [App\Http\Controllers\AlquilerController::class,'create'])->name('Alquiler.create');

Route::get('edit_alquiler{edit}', [App\Http\Controllers\AlquilerController::class,'edit'])->name('edit_alquiler.edit');

Route::put('edit_alquiler{update}', [App\Http\Controllers\AlquilerController::class,'update'])->name('edit_alquiler.update');





/**ruta para generar las ordenes */
Route::get('Orden{edit}', [App\Http\Controllers\OrdenController::class,'edit'])->name('orden.edit');

/**calculo */
Route::get('Orden', [App\Http\Controllers\CalculoController::class,'calculo'])->name('Orden.calculo');

/**Create Orden */
Route::post('Orden/{id}', [App\Http\Controllers\OrdenController::class,'create'])->name('orden.create');

/**Ruta Invoices */
ROute::get('Orden/{ordens}/generateInvoice', [App\Http\Controllers\OrdenController::class,'generateInvoices'])->name('orden.generateInvoices');


/**ruta RFLTQ */
Route::get('RFLTQ', [App\Http\Controllers\RFController::class,'index'])->name('RFLTQ');

