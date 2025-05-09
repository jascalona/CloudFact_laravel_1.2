<?php 
use Carbon\Carbon;

$DateActual = now()->format("d-m-y");

$fecha_actual = Carbon::now();
$mes_anio_actual = $fecha_actual->translatedFormat('F Y');


?>

@extends('layouts.structure')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudFact-Contact</title>

    <!--STYLES-->
    <link rel="stylesheet" href="{{ asset('assets/table_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/setting.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/card.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/table.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>


    <script src="{{ asset('js/check.js') }}"></script>
    <script src="{{ asset('js/tab.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <!--STYLES-->

</head>

<!--TABLE LECTURAS PRINT-->
<script>
    $(document).ready(function () {
        $('#myTable').DataTable(
            {
                "language": {
                    "url": "cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
                }
            }
        );
    });
</script>
<!--TABLE LECTURAS PRINT-->


<!--TABLE LECTURAS SCAN-->
<script>
    $(document).ready(function () {
        $('#myTable_scan').DataTable(
            {
                "language": {
                    "url": "cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
                }
            }
        );
    });
</script>
<!--TABLE LECTURAS SCAN-->

<body>


    @section('content')

        <main class="main-content position-relative">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur"
                data-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm">Pages</li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Facturación</li>
                        </ol>
                    </nav>

                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">

                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Type here...</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>


                        <button type="button" class="btn btn-dark position-relative" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">
                            <i class='bx bxs-bell-ring'></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                99+
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </button>

                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <div class="container-fluid py-2">
                <div class="row">
                    <div class="ms-3">
                        <h3 class="mb-0 h4 font-weight-bolder">Bienvenid@ {{ Auth::user()->name }}</h3>
                        <p class="mb-4">
                            Monitorea metricas clave. Consulta Informes y analiza la informacion
                        </p>
                    </div>
                </div>

            </div>

            <!--VISTA-->
            <div class="tab-" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

                <div class="card-body p-3">
                    <div class="row new-contact card-lectura bg-white">

                        <div class="viw-header">
                            <div class="logo">
                                <img src="{{ asset('images/cloud-regular-120.png') }}" alt="">
                                <h5>CloudFact<br>
                                    <span>Cloud Reading System</span>
                                </h5>
                            </div>
                        </div>


                        <div class="input-group mt-5 mb-4">
                            <div class="form-text" id="basic-addon4">Numero de Factura:</div>
                            <input style="font-size: 38px" type="text" class="form-"
                                placeholder="Por ejemplo: 0916" aria-label="Username"
                                aria-describedby="basic-addon1" value="">
                        </div>


                        <ul class="nav nav-tabs mt-5" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="disabled-tab-0" data-bs-toggle="tab"
                                    href="#disabled-tabpanel-0" role="tab" aria-controls="disabled-tabpanel-0"
                                    aria-selected="true">Datos del Cliente</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="disabled-tab-1" data-bs-toggle="tab" href="#disabled-tabpanel-1"
                                    role="tab" aria-controls="disabled-tabpanel-1" aria-selected="false">Información
                                    Detallada</a>
                            </li>

                        </ul>

                        <div class="tab-content pt-5" id="tab-content">

                            <!--vista 01-->
                            <div class="tab-pane active" id="disabled-tabpanel-0" role="tabpanel"
                                aria-labelledby="disabled-tab-0">

                                <h4 class="mb-4"><strong>Datos del Cliente</strong></h4>

                                <!--vsita 01 se debe ajustar el responsivo-->
                                <div class="viw-i d-flex">
                                    <div class="col-md-6 mb-md-0 mb-4">
                                        <div class="col-md-">
                                            <div
                                                class="card card-body lectura card-plain border-radius-lg d-block align-items-center flex-row">
                                                <!--form auto completado-->

                                                <div class="form-text" id="basic-addon4">Cliente</div>
                                                <div class="input-group mb-3">
                                                        <input type="text" class="form" placeholder="Cliente"
                                                            aria-label="Username" aria-describedby="basic-addon1" value="{{ $clienteL->cliente }}">
                                                </div>

                                                <div class="">

                                                    <div class="form-text mt-4" id="basic-addon4">Direccion Fiscal</div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form" placeholder="Por ejemplo: Av Eugenio Mendoza Edif Torre La Castellana P8 Ofc 8 - La Castellana"
                                                            aria-label="Username" aria-describedby="basic-addon1" value="{{ $clienteL->direct_f }}" readonly>
                                                    </div>

                                                    <div class="form-text mt-4" id="basic-addon4">Ciudad</div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form" placeholder="Por ejemplo: Caracas"
                                                        aria-label="Username" aria-describedby="basic-addon1" value="{{ $clienteL->city }}" readonly>
                                                    </div>
                                                    
                                                    <div class="input-group mb-4">
                                                    <div class="form-text" id="basic-addon4">RIF - Cliente</div>
                                                    <input type="text" class="form-" name="rif"
                                                        placeholder="Por ejemplo, J000000006" id="rif" aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly value="{{ $clienteL->rif }}" readonly>
                                                    </div>

                                                </div>

                                                <!--form auto completado-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div
                                            class="card card-body lectura card-plain border-radius-lg d-block align-items-center flex-row">
                                            <!--form auto completado-->

                                            <div class="mt-3">

                                                <div class="form-text" id="basic-addon4">Numero de Contrado</div>
                                                <div class="input-group mb-3">
                                                    <input style="font-size: 20px; font-weight: 600;" type="text" class="form" placeholder="Por ejemplo: 056JE22K"
                                                        aria-label="Username" aria-describedby="basic-addon1" value="{{ $clienteL->n_contract }}" readonly>
                                                </div>

                                                <div class="form-text" id="basic-addon4">Emision de Factura</div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form" placeholder="por ejemplo: 07/05/25"
                                                        aria-label="Username" aria-describedby="basic-addon1"
                                                        value="{{ $DateActual }}" readonly>
                                                </div>

                                            
                                                <div class="form-text" id="basic-addon4">Precio global por click B/N USD</div>
                                                    <div class="input-group mb-3">
                                                        <input type="number" step="0.01" class="form"
                                                        placeholder="0.00" aria-label="Username"
                                                        aria-describedby="basic-addon1" value="{{ $clienteL->P_CLICK_BN_USD }}" readonly>
                                                    </div>

                                                    <div class="form-text" id="basic-addon4">Precio global por click Color USD</div>
                                                    <div class="input-group mb-3">
                                                        <input type="number" step="0.01" class="form"
                                                        placeholder="0.00" aria-label="Username"
                                                        aria-describedby="basic-addon1" value="{{ $clienteL->P_CLICK_COLOR_USD }}" readonly>
                                                    </div>

                                            </div>

                                            <!--form auto completado-->
                                        </div>

                                    </div>
                                </div>

                                <!--vsita 01 se debe ajustar el responsivo-->
                                <div class="col-md-12 mb-md-0 mb-4">
                                    <div class="col-md-">
                                           
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link active" id="simple-tab-0" data-bs-toggle="tab" href="#simple-tabpanel-0" role="tab" aria-controls="simple-tabpanel-0" aria-selected="true">Historial de Volumen Printer</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-1" role="tab" aria-controls="simple-tabpanel-1" aria-selected="false">Historial de Volumen digitization</a>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link" id="simple-tab-1" data-bs-toggle="tab" href="#simple-tabpanel-2" role="tab" aria-controls="simple-tabpanel-1" aria-selected="false">Resumen de Facturas</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content pt-5" id="tab-content">

                                                <!--vista printer-->
                                                <div class="tab-pane active" id="simple-tabpanel-0" role="tabpanel" aria-labelledby="simple-tab-0">
                                                    
                                                <div class="content-table">
                                                <h4 class="mb-4">Lecturas Copiado</h4>
                                                    <table id="myTable" class="display">
                                                        <thead>
                                                            <tr>
                                                                <th>Serial</th>
                                                                <th>Modelo</th>
                                                                <th>Mes</th>
                                                                <th>Fecha</th>
                                                                <th>Cont. Anterior B/N</th>
                                                                <th>Cont. Actual B/N</th>
                                                                <th>Volum B/N</th>
                                                                <th>Cont. Anterior Color</th>
                                                                <th>Cont. Actual Color</th>
                                                                <th>Volum Color</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach ($load as $row_load)

                                                            <tr>
                                                                <td>{{ $row_load->serial }}</td>
                                                                <td>{{ $row_load->model }}</td>
                                                                <td>{{ $row_load->mes }}</td>
                                                                <td>{{ $row_load->date }}</td>
                                                                <td>{{ $row_load->cont_ante_bn }}</td>
                                                                <td>{{ $row_load->cont_actu_bn }}</td>
                                                                <td>{{ $row_load->volum_bn }}</td>
                                                                <td>{{ $row_load->cont_ante_color }}</td>
                                                                <td>{{ $row_load->cont_actu_color }}</td>
                                                                <td>{{ $row_load->volum_color }}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                                    
                                                </div>
                                                <!--vista printer-->


                                                <!--vista digitalizacion-->
                                                <div class="tab-pane" id="simple-tabpanel-1" role="tabpanel" aria-labelledby="simple-tab-1">
                                                    
                                                    <div class="content-table">
                                                        <h4 class="mb-4">Lecturas Digitalización</h4>


                                                        <table id="myTable_scan" class="display">
                                                            <thead>
                                                                <tr>
                                                                    <th>Serial</th>
                                                                    <th>Modelo</th>
                                                                    <th>Mes</th>
                                                                    <th>Fecha</th>
                                                                    <th>Cont. Ant. ScanImages</th>
                                                                    <th>Cont. Act. ScanImages</th>
                                                                    <th>Volum ScanImages</th>
                                                                    <th>Cont. Ante. ScanJobs</th>
                                                                    <th>Cont. Actu. ScanJobs</th>
                                                                    <th>Volum ScanJobs</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                @foreach ($load as $row_load_scan)

                                                                <tr>
                                                                    <td>{{ $row_load_scan->serial }}</td>
                                                                    <td>{{ $row_load_scan->model }}</td>
                                                                    <td>{{ $row_load_scan->mes }}</td>
                                                                    <td>{{ $row_load_scan->date }}</td>
                                                                    <td>{{ $row_load_scan->cont_ante_scan_images }}</td>
                                                                    <td>{{ $row_load_scan->cont_actu_scan_images }}</td>
                                                                    <td>{{ $row_load_scan->volum_scan_images }}</td>
                                                                    <td>{{ $row_load_scan->cont_ante_scan_jobs }}</td>
                                                                    <td>{{ $row_load_scan->cont_actu_scan_jobs }}</td>
                                                                    <td>{{ $row_load_scan->volum_scan_jobs }}</td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>                                                
                                                </div>
                                                <!--vista digitalizacion-->

                                                <!--vista cotizacion-->
                                                <div class="tab-pane" id="simple-tabpanel-2" role="tabpanel" aria-labelledby="simple-tab-2">

                                                <table id="myTable" class="display">
                                                    <thead>
                                                        <tr>
                                                            <th>Column 1</th>
                                                            <th>Column 2</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Row 1 Data 1</td>
                                                            <td>Row 1 Data 2</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Row 2 Data 1</td>
                                                            <td>Row 2 Data 2</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                
                                                </div>
                                                <!--vista cotizacion-->
                                            </div>

                                    </div>
                                        
                                </div>

                            </div>
                            <!--vista 01-->



                            <!--vista 02-->
                            <div class="tab-pane" id="disabled-tabpanel-1" role="tabpanel" aria-labelledby="disabled-tab-1">
                                <h4 class="mb-4"><strong>Información Detallada</strong></h4>
                                <!--vsita 012se debe ajustar el responsivo-->
                                  <!--vsita 01 se debe ajustar el responsivo-->
                                  <div class="viw-i d-flex">
                                    <div class="col-md-6 mb-md-0 mb-4">
                                        <div class="col-md-">
                                            <div
                                                class="card card-body lectura card-plain border-radius-lg d-block align-items-center flex-row">
                                                <!--form auto completado-->

                                                <div class="form-text" id="basic-addon4">Cliente</div>
                                                <div class="input-group mb-3">
                                                        <input type="text" class="form" placeholder="Cliente"
                                                            aria-label="Username" aria-describedby="basic-addon1" value="{{ $clienteL->cliente }}">
                                                </div>

                                                <div class="">

                                                    <div class="form-text mt-4" id="basic-addon4">Direccion Fiscal</div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form" placeholder="Por ejemplo: Av Eugenio Mendoza Edif Torre La Castellana P8 Ofc 8 - La Castellana"
                                                            aria-label="Username" aria-describedby="basic-addon1" value="{{ $clienteL->direct_f }}" readonly>
                                                    </div>

                                                    <div class="form-text mt-4" id="basic-addon4">Ciudad</div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form" placeholder="Por ejemplo: Caracas"
                                                        aria-label="Username" aria-describedby="basic-addon1" value="{{ $clienteL->city }}" readonly>
                                                    </div>
                                                    
                                                    <div class="input-group mb-4">
                                                    <div class="form-text" id="basic-addon4">RIF - Cliente</div>
                                                    <input type="text" class="form-" name="rif"
                                                        placeholder="Por ejemplo, J000000006" id="rif" aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly value="{{ $clienteL->rif }}" readonly>
                                                    </div>

                                                    <div class="form-text mt-4" id="basic-addon4">Tipo de Cambio</div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form" placeholder="Por ejemplo: Paralelo"
                                                            aria-label="Username" aria-describedby="basic-addon1"  value="{{ $clienteL->tipo_cambio }}">
                                                    </div>

                                                </div>

                                                <!--form auto completado-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div
                                            class="card card-body lectura card-plain border-radius-lg d-block align-items-center flex-row">
                                            <!--form auto completado-->

                                            <div class="mt-2">

                                                <div class="form-text" id="basic-addon4">Numero de Contrado</div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form" placeholder="Por ejemplo: 056JE22K"
                                                        aria-label="Username" aria-describedby="basic-addon1" value="{{ $clienteL->n_contract }}" readonly>
                                                </div>

                                                <div class="form-text" id="basic-addon4">Emision de Factura</div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form" placeholder="por ejemplo: 07/05/25"
                                                        aria-label="Username" aria-describedby="basic-addon1"
                                                        value="{{ $DateActual }}" readonly>
                                                </div>

                                                <div class="form-text" id="basic-addon4">Mes</div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form" placeholder="por ejemplo: 07/05/25"
                                                        aria-label="Username" aria-describedby="basic-addon1"
                                                        value="{{ $mes_anio_actual }}" readonly>
                                                </div>

                                                
                                            
                                                <div class="form-text" id="basic-addon4">Precio global por click B/N USD</div>
                                                    <div class="input-group mb-3">
                                                        <input type="number" step="0.01" class="form"
                                                        placeholder="0.00" aria-label="Username"
                                                        aria-describedby="basic-addon1" value="{{ $clienteL->P_CLICK_BN_USD }}" readonly>
                                                    </div>

                                                    <div class="form-text" id="basic-addon4">Precio global por click Color USD</div>
                                                    <div class="input-group mb-3">
                                                        <input type="number" step="0.01" class="form"
                                                        placeholder="0.00" aria-label="Username"
                                                        aria-describedby="basic-addon1" value="{{ $clienteL->P_CLICK_COLOR_USD }}" readonly>
                                                    </div>

                                            </div>

                                            <!--form auto completado-->
                                        </div>

                                    </div>
                                </div>


                                <hr>

                                <div class="viw-i d-flex mt-5">

                                <div class="col-md-6 mb-md-0 mb-4">
                                    <h4 class="mb-4"><strong>Concepto o Descripción</strong></h4>

                                    <div class="content-fact">
                                        <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm- col-form-label">Volumen a Facturar B/N USD</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                                        </div>
                                        </div>
                                    </div>


                                    <div class="content-fact">
                                        <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm- col-form-label">Volumen a Facturar Color USD</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                                        </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-6 mb-md-0 mb-4">
                                    <h4 class="mb-4"><strong>Montos a Facturar</strong></h4>
                                    

                                    <div class="content-fact">
                                        <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm- col-form-label">Monto B/N USD</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                                        </div>
                                        </div>
                                    </div>

                                 
                                    <div class="content-fact">
                                        <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm- col-form-label">Monto Color USD</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                                        </div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div class="col-md-12 mb-md-0 mt-4 mb-4">
                                    <h4 class="mb-4"><strong>Cargo Minimo</strong></h4>
                                    
                                    <div class="content-fact">
                                        <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm- col-form-label">Monto Cargo minimo</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                                        </div>
                                        </div>
                                    </div>

                                    <h4 class="mb-4"><strong>Base Imponible USD</strong></h4>
                                    
                                    <div class="content-fact">
                                        <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm- col-form-label">Monto USD</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                                        </div>
                                        </div>
                                    </div>

                                    

                                </div>

                        </div>
                        <!--vista 02-->



            </div>
            <!--VISTA-->



        </main>

    @endsection

</body>

</html>