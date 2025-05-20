@extends('layouts.structure')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudFact-Lead</title>

    <!--STYLES-->
    <link rel="stylesheet" href="{{ asset('assets/table_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/setting.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/card.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/table.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>


    <script src="{{ asset('js/scroller_tables.js') }}"></script>
    <script src="{{ asset('js/material-dashboard.js') }}"></script>
    <script src="{{ asset('js/material-dashboard.js.map') }}"></script>
    <script src="{{ asset('js/material-dashboard.min.js') }}"></script>
    <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('js/plugins/Chart.extension.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <!--STYLES-->

</head>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable(
            {
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.1/i18n/es-ES.json"
                }
            }
        );
    });
</script>

<body style="background-color: rgba(208, 218, 237, 0.296);">

    @section('content')
        <main class="main-content position-relative">
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur"
                data-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm">Pages</li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">LCustomer</li>
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

            @if ($message_e = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h5 class="alert-heading"><i class='bx bx-check'></i> Proceso completado con Exito!</h5>
                    {{ $message_e }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i
                            class='bx bx-x'></i></button>
                </div>
            @endif

            <div class="container-fluid py-2">
                @csrf
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">

                            <div class="col-xl-6 mb-xl-0 mb-4">
                                <div class="card bg-transparent shadow-xl">
                                    <div class="overflow-hidden position-relative border-radius-xl">
                                        <span class="mask bg-gradient-dark opacity-10"></span>
                                        <div class="card-body position-relative z-index-1 p-3 text-white">
                                            <h4><strong>{{$clienteL->cliente}}</strong></h4>
                                            <h5 class="text-white mt-4 mb-5 pb-2">
                                                #{{$clienteL->n_contract}}
                                            </h5>
                                            <div class="d-flex">
                                                <div class="d-flex">
                                                    <div class="me-4">
                                                        <p class="text-white text-sm opacity-8 mb-0">RIF</p>
                                                        <h6 class="text-white mb-0">{{$clienteL->rif}} </h6>
                                                    </div>
                                                    <div>
                                                        <p class="text-white text-sm opacity-8 mb-0">Tipo de Contrato
                                                        </p>
                                                        <h6 class="text-white mb-0">{{$clienteL->tipo_c}}</h6>
                                                    </div>
                                                </div>
                                                <div class="ms-auto w-10 d-flex align-items-end justify-content-end">
                                                    <img class="w-60 mt-2" src="{{ asset('images/x.png') }}" alt="logo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--PRECIO SCAN-->
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-md-6 col-6">
                                        <div class="card">
                                            <div class="card-header mx-4 p-3 text-center">
                                                <div
                                                    class="icon icon-shape icon-lg bg-gradient-dark shadow text-center border-radius-lg">
                                                    <i class='bx bx-coin-stack'></i>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0 p-3 text-center">
                                                <h6 class="text-center mb-0">Precio Bs</h6>
                                                <span class="text-xs">Precio por Click Bs.</span>
                                                <hr class="horizontal dark my-3">
                                                <h5 class="mb-0">$0</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-6">
                                        <div class="card">
                                            <div class="card-header mx-4 p-3 text-center">
                                                <div
                                                    class="icon icon-shape icon-lg bg-gradient-dark shadow text-center border-radius-lg">
                                                    <i class='bx bx-dollar'></i>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0 p-3 text-center">
                                                <h6 class="text-center mb-0">Precio $</h6>
                                                <span class="text-xs">Precio por Click USD.</span>
                                                <hr class="horizontal dark my-3">
                                                <h5 class="mb-0">$0</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--PRECIO SCAN-->

                        </div>

                        <!--GRAFICOS-->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mt-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="mb-0 ">Carga de Contadores</h6>
                                        <p class="text-sm ">Rendimiento Mensual</p>
                                        <div class="pe-2">
                                            <div class="chart">
                                                <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                                            </div>
                                        </div>
                                        <hr class="dark horizontal">
                                        <div class="d-flex ">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 mt-6 mb-4">
                                <div class="card ">
                                    <div class="card-body">
                                        <h6 class="mb-0 ">Facturación</h6>
                                        <p class="text-sm ">Registro de cotización mensual. </p>
                                        <div class="pe-2">
                                            <div class="chart">
                                                <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                                            </div>
                                        </div>
                                        <hr class="dark horizontal">
                                        <div class="d-flex ">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--GRAFICOS-->


                        </div>

                    </div>

                    <!--RESUMEN FACTURACION-->
                    <div class="col-lg-4">
                        <div class="card h-100">
                            <div class="card-header pb-0 p-3">
                                <div class="row">

                                    <div class="card-body p-3 pb-0">

                                        <ul class="nav nav-fill nav-tabs" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active" id="fill-tab-0" data-bs-toggle="tab"
                                                    href="#fill-tabpanel-0" role="tab" aria-controls="fill-tabpanel-0"
                                                    aria-selected="true">Resumen de factura</a>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link" id="fill-tab-1" data-bs-toggle="tab"
                                                    href="#fill-tabpanel-1" role="tab" aria-controls="fill-tabpanel-1"
                                                    aria-selected="false">Opciones Avanzadas</a>
                                            </li>

                                        </ul>

                                    </div>
                                </div>
                            </div>

                            <!--body resumen-->
                            <div class="tab-content pt-5 m-3" id="tab-content">
                                    
                                    <div class="tab-pane active" id="fill-tabpanel-0" role="tabpanel"
                                        aria-labelledby="fill-tab-0">

                                        @foreach ($ordens as $ListOrden)

                                            <ul class="list-group">
                                                <li
                                                    class="list-group-item border-1 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                                    <div class="d-flex flex-column p-2">
                                                        <h6 class="mb-1 text-dark font-weight-bold text-sm">
                                                            {{ $ListOrden->mes }}
                                                        </h6>
                                                        <span class="text-xs"># {{ $ListOrden->n_contract }}</span>
                                                    </div>
                                                    <div class="d-flex align-items-center text-sm">
                                                        {{ $ListOrden->base_imponible }} $
                                                        <a href="{{ route('orden.generateInvoices', $ListOrden->id) }}"
                                                            class="btn btn-link text-dark text-sm mb-0 px-0 ms-4">
                                                            <i style="font-size: 16px" class='bx bxs-file-pdf'></i> PDF</a>
                                                    </div>
                                                </li>
                                            </ul>

                                        @endforeach

                                    </div>

                                    <div class="tab-pane" id="fill-tabpanel-1" role="tabpanel" aria-labelledby="fill-tab-1">
                                        <!--GENERAR ORDEN-->
                                        <div class="card mb-2">
                                            <div class="card-body">
                                                <h5 class="card-title mb-3">Generar Ordenes</h5>
                                                <span class="card-text">
                                                    <a style="border: solid 1px;" href="{{ route('orden.edit', $clienteL->n_contract) }}" type="submit"
                                                    value="submit" name="btn-load" class="btn btn-outline-default"
                                                    href="javascript:;">Nueva Orden</a>
                                                </span>
                                            </div>
                                        </div>
                                        <!--GENERAR ORDEN-->

                                        <!--LECTUAS-->
                                        <div class="accordion accordion-flush mt-3" id="accordionFlushExample">

                                            <div class="accordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Lectura Masiva
                                                    </button>
                                                    </h2>

                                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <div class="card-body">

                                                                    <button style="border: solid 1px;" class="btn btn-outline-default" data-bs-toggle="modal" data-bs-target="#exampleModal" href="">Cargar ahora</button>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-lg">
                                                                        <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Carga de lectura masiva</h1>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">

                                                                            <!--01 Downloads plantilla-->
                                                                            <h2 class="fs-5"><strong>1. Descargue "Planilla Carga" de muestra(*.CSV)</strong></h2>
                                                                            
                                                                            <label class="mt-4" for="">Seleccione un Rango de fechas</label>
                                                                            <div class="input-group mb-3">
                                                                                
                                                                                <div class="form-floating m-2">
                                                                                    <input style="border: solid 1px rgba(112, 112, 112, 0.54);" type="date" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
                                                                                    <label for="floatingInputGrid">Fecha desde:</label>
                                                                                </div>

                                                                                <div class="form-floating m-2">
                                                                                    <input style="border: solid 1px rgba(112, 112, 112, 0.54);" type="date" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
                                                                                    <label for="floatingInputGrid">Fecha hasta:</label>
                                                                                </div>

                                                                            </div>

                                                                            <button name="downloads_p" class="btn btn-primary m-2">Descargar</button>

                                                                            <!--01 Downloads plantilla-->
                                                                            
                                                                            <hr>

                                                                            <form action="" method="post" >

                                                                                <!--02 Carga masiva-->
                                                                                <h2 class="fs-5"><strong>2. Seleccione la plantilla descargada (*.CSV)</strong></h2>
                                                                                
                                                                                <label class="mt-4" for="">Plantilla con lecturas actualizadas</label>
                                                                                <div class="input-group mb-3">
                                                                                    <input style="border: solid 1px rgba(112, 112, 112, 0.54);" type="file" class="form-control" id="inputGroupFile02" required>
                                                                                </div>
                                                                                <!--02 Carga masiva-->

                                                                        </div>

                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                                <button type="submit" name="load_customer" value="submit" class="btn btn-primary">Cargar Lecturas</button>
                                                                            </div>

                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                    </div>

                                                                </div>

                                                                <div style="font-size: 13px; height: auto; padding: 10px;" class="card-footer text-muted">
                                                                    Ideal para equipos conectados (XRC,XDA)
                                                                </div>

                                                            </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <br>
                                            
                                            <div class="accordion-item">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                        Lectura Manual
                                                    </button>
                                                    </h2>

                                                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">

                                                            <div class="card-body">

                                                            <!--MODAL CARGAS MANUALES-->
                                                            <button style="border: solid 1px;" class="btn btn-outline-default" data-bs-toggle="modal" data-bs-target="#LecturaManual" href="">Cargar ahora</button>

                                                            <!--BODY MODAL CARGAS MANUALES-->
                                                            <div class="modal fade" id="LecturaManual" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="LecturaManual" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="LecturaManual">Carga de lectura manual</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                        sdsd

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                    <button type="button" class="btn btn-primary">Cargar</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <!--BODY MODAL CARGAS MANUALES-->
                                                            <!--MODAL CARGAS MANUALES-->


                                                            </div>

                                                            <div style="font-size: 13px; height: auto; padding: 10px;" class="card-footer text-muted">
                                                                Ideal para equipos en localidades foráneas cuyo acceso sea limitado
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>


                                        </div>
                                        <!--LECTURAS-->
                                        
                                      

                                    </div>

                            </div>
                            <!--body resumen-->


                        </div>
                    </div>
                    <!--RESUMEN FACTURACION-->

                    <!--CARD FOR PRECIO-->
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mt-5 mb-4">
                        <div class="card">
                            <div class="card-header p-2 ps-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-sm mb-0 text-capitalize">Precion B/N $</p>
                                        <h4 class="mb-0">{{ $clienteL->P_CLICK_BN_USD }}</h4>
                                    </div>
                                    <div
                                        class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                                        <i class='bx bxs-color-fill'></i>
                                    </div>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-2 ps-3">
                                <p class="mb-0 text-sm"><small>Precio por Click B/N USD.</small></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 mb-xl-0 mt-5 mb-4">
                        <div class="card">
                            <div class="card-header p-2 ps-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-sm mb-0 text-capitalize">Precion B/N Bs</p>
                                        <h4 class="mb-0">{{ $clienteL->P_CLICK_BN_BS }}</h4>
                                    </div>
                                    <div
                                        class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                                        <i class='bx bxs-color-fill'></i>
                                    </div>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-2 ps-3">
                                <p class="mb-0 text-sm"><small>Precio por Click B/N Bs.</small></p>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 mb-xl-0 mt-5 mb-4">
                        <div class="card">
                            <div class="card-header p-2 ps-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-sm mb-0 text-capitalize">Precio Color $</p>
                                        <h4 class="mb-0">{{ $clienteL->P_CLICK_COLOR_USD }}</h4>
                                    </div>
                                    <div
                                        class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                                        <i class='bx bxs-color-fill' style='color:#0ae089'></i>
                                    </div>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-2 ps-3">
                                <p class="mb-0 text-sm"><small>Precio por Click Color USD.</small></p>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6 mt-5">
                        <div class="card">
                            <div class="card-header p-2 ps-3">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="text-sm mb-0 text-capitalize">Precio Color Bs</p>
                                        <h4 class="mb-0">{{ $clienteL->P_CLICK_COLOR_BS }}</h4>
                                    </div>
                                    <div
                                        class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                                        <i class='bx bxs-color-fill' style='color:#0ae089'></i>
                                    </div>
                                </div>
                            </div>
                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-2 ps-3">
                                <p class="mb-0 text-sm"><small>Precio por Click Color Bs.</small></p>

                            </div>
                        </div>
                    </div>
                    <!--CARD FOR PRECIO-->


                </div>

                <!--TABLE ORDEN-->
                <div class="col-md-15 mb-lg-0 mb-4">
                    <div class="card mt-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <h4 class="mb-3 text-secondary font-weight-bolder opacity-7">Customer's:
                                        <small>Load</small>
                                    </h4>
                                </div>

                            </div>
                        </div>
                        
                        <!--TABLE ORDEN-->
                        <div class="main p-5">

                            <div class="content-table">
                                <table id="myTable" class="table align-items-center mb-0">
                                    <thead>
                                        <tr style="font-size: 13px;">
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Cliente</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                RIF</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Serial</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Modelo</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                N# Contrato</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Activo</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Localidad</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Mes</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Date</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Cont. Anterior B/N</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Cont. Actual B/N</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Volum. B/N</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                AMCV_bn</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Cont. Anterior Color</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Cont. Actual Color</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Volum. Color</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                AMCV_color</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Cont. Anterior ScanImages</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Cont. Actual ScanImages</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Volum. Scan Images</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Cont. Anterior ScanJobs</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Cont. Actual ScanJobs</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                Volum. Scan Jobs</th>
                                        </tr>
                                    </thead>


                                        <tbody>
                                            @foreach ($load as $row)
                                            <tr style="font-size: 12px;">
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->cliente }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->rif }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->serial }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->model }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->n_contract }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->activo }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->location }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->mes }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->date }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->cont_ante_bn }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->cont_actu_bn }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->volum_bn }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->AMCV_bn }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->cont_ante_color }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->cont_actu_color }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->volum_color }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->AMCV_color }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->cont_ante_scan_images }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->cont_actu_scan_images }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->volum_scan_images }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->cont_ante_scan_jobs }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->cont_actu_scan_jobs }}</td>
                                                <td class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-">
                                                    {{ $row->volum_scan_jobs }}</td>

                                            </tr>
                                            @endforeach
                                        </tbody>


                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!--TABLE ORDEN-->


            </div>

            </div>
            </div>
            </div>

            <footer class="footer py-4  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                © 2010-2025. CloudFact <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Xerox de
                                    Venezuela</a>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>


        </main>

        <script>
            var ctx = document.getElementById("chart-bars").getContext("2d");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["M", "T", "W", "T", "F", "S", "S"],
                    datasets: [{
                        label: "Views",
                        tension: 0.4,
                        borderWidth: 0,
                        borderRadius: 4,
                        borderSkipped: false,
                        backgroundColor: "#43A047",
                        data: [50, 45, 22, 28, 50, 60, 76],
                        barThickness: 'flex'
                    },],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: '#e5e5e5'
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 500,
                                beginAtZero: true,
                                padding: 10,
                                font: {
                                    size: 14,
                                    lineHeight: 2
                                },
                                color: "#737373"
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#737373',
                                padding: 10,
                                font: {
                                    size: 14,
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });


            var ctx2 = document.getElementById("chart-line").getContext("2d");

            new Chart(ctx2, {
                type: "line",
                data: {
                    labels: ["J", "F", "M", "A", "M", "J", "J", "A", "S", "O", "N", "D"],
                    datasets: [{
                        label: "Sales",
                        tension: 0,
                        borderWidth: 2,
                        pointRadius: 3,
                        pointBackgroundColor: "#43A047",
                        pointBorderColor: "transparent",
                        borderColor: "#43A047",
                        backgroundColor: "transparent",
                        fill: true,
                        data: [120, 230, 130, 440, 250, 360, 270, 180, 90, 300, 310, 220],
                        maxBarThickness: 6

                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                        tooltip: {
                            callbacks: {
                                title: function (context) {
                                    const fullMonths = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                                    return fullMonths[context[0].dataIndex];
                                }
                            }
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [4, 4],
                                color: '#e5e5e5'
                            },
                            ticks: {
                                display: true,
                                color: '#737373',
                                padding: 10,
                                font: {
                                    size: 12,
                                    lineHeight: 2
                                },
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#737373',
                                padding: 10,
                                font: {
                                    size: 12,
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });

            var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

            new Chart(ctx3, {
                type: "line",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Tasks",
                        tension: 0,
                        borderWidth: 2,
                        pointRadius: 3,
                        pointBackgroundColor: "#43A047",
                        pointBorderColor: "transparent",
                        borderColor: "#43A047",
                        backgroundColor: "transparent",
                        fill: true,
                        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                        maxBarThickness: 6

                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [4, 4],
                                color: '#e5e5e5'
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: '#737373',
                                font: {
                                    size: 14,
                                    lineHeight: 2
                                },
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [4, 4]
                            },
                            ticks: {
                                display: true,
                                color: '#737373',
                                padding: 10,
                                font: {
                                    size: 14,
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });
        </script>
    @endsection



</body>

</html>