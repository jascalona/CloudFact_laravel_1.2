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
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Alquiler</li>
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
                            <div class="form-text" id="basic-addon4">Nombre del Contrato:</div>
                            <input style="font-size: 38px" type="text" class="form-"
                                placeholder="Por ejemplo: 056JE22K Xerox Corporation, C.A" aria-label="Username"
                                aria-describedby="basic-addon1" value="{{ $alquiler->name_c }}">
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
                                    General</a>
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

                                                <div class="alquiler">

                                                    <div class="form-text" id="basic-addon4">Seleccione un Cliente</div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form"
                                                            placeholder="Por ejemplo: Xerox Corporation"
                                                            aria-label="Username" aria-describedby="basic-addon1"
                                                            value="{{ $alquiler->cliente }}">
                                                    </div>

                                                    <div class="form-text mt-4" id="basic-addon4">Fecha de Inicio</div>
                                                    <div class="input-group mb-3">
                                                        <input type="date" class="form" placeholder="Emision"
                                                            aria-label="Username" aria-describedby="basic-addon1"
                                                            value="{{ $alquiler->date_init_contract }}">
                                                    </div>

                                                    <div class="form-text mt-4" id="basic-addon4">Fecha de Final</div>
                                                    <div class="input-group mb-3">
                                                        <input type="date" class="form" placeholder="Emision"
                                                            aria-label="Username" aria-describedby="basic-addon1"
                                                            value="{{  $alquiler->date_close_contract}}">
                                                    </div>

                                                    <ul class="nav nav-fill nav-tabs w-90 mt-6" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link active" id="fill-tab-0" data-bs-toggle="tab"
                                                                href="#fill-tabpanel-0" role="tab"
                                                                aria-controls="fill-tabpanel-0" aria-selected="true">Precio
                                                                por
                                                                click global</a>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <a class="nav-link" id="fill-tab-1" data-bs-toggle="tab"
                                                                href="#fill-tabpanel-1" role="tab"
                                                                aria-controls="fill-tabpanel-1" aria-selected="false">Precio
                                                                por
                                                                click individual</a>
                                                        </li>

                                                    </ul>
                                                    <div class="tab-content pt-5" id="tab-content">

                                                        <!--Vista 01-->
                                                        <div class="tab-pane active w-100" id="fill-tabpanel-0"
                                                            role="tabpanel" aria-labelledby="fill-tab-0">
                                                            <!--show click Global-->
                                                            <div class="cont" id="show_global">
                                                                <div class="form-text" id="basic-addon4">Precio global por
                                                                    click
                                                                    B/N USD
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <input type="number" step="0.01" class="form"
                                                                        placeholder="0.00" aria-label="Username"
                                                                        aria-describedby="basic-addon1"
                                                                        value="{{ $alquiler->P_CLICK_BN_USD }}">
                                                                </div>

                                                                <div class="form-text" id="basic-addon4">Precio global por
                                                                    click
                                                                    Color USD
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <input type="number" step="0.01" class="form"
                                                                        placeholder="0.00" aria-label="Username"
                                                                        aria-describedby="basic-addon1"
                                                                        value="{{ $alquiler->P_CLICK_COLOR_USD }}">
                                                                </div>

                                                                <div class="form-text" id="basic-addon4">Copiado Minimo
                                                                    Contratado B/N</div>
                                                                <div class="input-group mb-3">
                                                                    <input type="number" class="form" placeholder="2500"
                                                                        aria-label="Username"
                                                                        aria-describedby="basic-addon1" value="0">
                                                                </div>

                                                                <div class="form-text" id="basic-addon4">Copiado Minimo
                                                                    Contratado Color</div>
                                                                <div class="input-group mb-3">
                                                                    <input type="number" class="form" placeholder="2500"
                                                                        aria-label="Username"
                                                                        aria-describedby="basic-addon1" value="0">
                                                                </div>

                                                                <div class="form-text" id="basic-addon4">Precio Cargo Minimo
                                                                </div>
                                                                <div class="input-group mb-3">
                                                                    <input type="number" class="form" placeholder="1.000,84"
                                                                        aria-label="Username"
                                                                        aria-describedby="basic-addon1" value="">
                                                                </div>

                                                                <div class="form-text" id="basic-addon4">Label</div>
                                                                <div class="input-group mb-3">
                                                                    <input type="number" class="form" placeholder="450,00"
                                                                        aria-label="Username"
                                                                        aria-describedby="basic-addon1" value="">
                                                                </div>

                                                            </div>
                                                            <!--show click Global-->
                                                        </div>

                                                        <div class="tab-pane" id="fill-tabpanel-1" role="tabpanel"
                                                            aria-labelledby="fill-tab-1">Definir con el cliente</div>
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

                                            <div class="alquiler">

                                                <div class="input-group mb-4">
                                                    <div class="form-text" id="basic-addon4">RIF - Cliente</div>
                                                    <input type="text" class="form-" name="rif"
                                                        placeholder="Por ejemplo, J000000006" id="rif" aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly
                                                        value="{{ $alquiler->rif }}">
                                                </div>

                                                <div class="form-text" id="basic-addon4">Numero de Contrado
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form" placeholder="Por ejemplo: 056JE22K"
                                                        aria-label="Username" aria-describedby="basic-addon1"
                                                        value="{{ $alquiler->n_contract }}">
                                                </div>


                                                <div class="form-text" id="basic-addon4">Duracion del Contrato (Numero)
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="number" class="form" placeholder="Por ejemplo: 12"
                                                        aria-label="Username" aria-describedby="basic-addon1"
                                                        value="{{ $alquiler->d_contract }}">
                                                </div>

                                                <div class="form-text mt-4" id="basic-addon4">Tipo de Contrato</div>
                                                <select class="form-select bb form-select-sm mb- mt-3"
                                                    aria-label="Large select example">
                                                    <option selected>{{ $alquiler->tipo_c }}</option>
                                                    <option value="1">FSMA</option>
                                                    <option value="2">Renta - TCO</option>
                                                    <option value="3">Renta - Plataforma</option>
                                                    <option value="2">Copiado minimo</option>
                                                    <option value="2">SMA</option>
                                                    <option value="2">Mixto (FSMA + Renta)</option>
                                                </select>

                                                <div class="form-text mt-4" id="basic-addon4">Vendedor Eje.</div>
                                                <select class="form-select bb form-select-sm mb-3 mt-3"
                                                    aria-label="Large select example">
                                                    <option selected>{{ $alquiler->vendedor }}</option>
                                                    <option value="1">Jose Escalona</option>
                                                    <option value="2">Jose Abraham</option>
                                                </select>

                                                <div class="form-text" id="basic-addon4">Administrador</div>
                                                <select class="form-select bb form-select-sm mb-3 mt-3"
                                                    aria-label="Large select example">
                                                    <option selected>{{ $alquiler->administrador_01 }}</option>
                                                    <option value="1">Jose Escalona</option>
                                                    <option value="2">Jose Abraham</option>
                                                </select>

                                            </div>
                                            <!--form auto completado-->
                                        </div>
                                    </div>
                                </div>
                                <!--vsita 01 se debe ajustar el responsivo-->

                            </div>
                            <!--vista 01-->



                            <!--vista 02-->
                            <div class="tab-pane" id="disabled-tabpanel-1" role="tabpanel" aria-labelledby="disabled-tab-1">
                                <h4 class="mb-4"><strong>Información General</strong></h4>
                                <!--vsita 012se debe ajustar el responsivo-->
                                <div class="viw-i d-flex">
                                    <div class="col-md-6 mb-md-0 mb-4">
                                        <div class="col-md-">
                                            <div
                                                class="card card-body lectura card-plain border-radius-lg d-block align-items-center flex-row">
                                                <!--form auto completado-->

                                                <div class="form-text mt-2" id="basic-addon4">Información Monetarea</div>
                                                <select class="form-select bb form-select-sm mb-4 mt-3 w-50"
                                                    aria-label="Large select example">
                                                    <option selected>{{ $alquiler->moneda }}</option>
                                                    <option value="1">Bolivares</option>
                                                    <option value="2">Dolares</option>
                                                </select>

                                                <div class="alquiler">

                                                    <div class="form-text mt-4" id="basic-addon4">Razones de Consorcio</div>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form" placeholder="Razones de Consorcio"
                                                            aria-label="Username" aria-describedby="basic-addon1" value="">
                                                    </div>

                                                    <div class="form-text mb-3 mt-5  id=" basic-addon4">Info All In</div>
                                                    <div class="grop">
                                                        <div class="group-check">
                                                            <label for="Equipos">Equipos</label>
                                                            <input type="checkbox" value="Equipos" id="Equipos">
                                                        </div>

                                                        <div class="group-check">
                                                            <label for="Suministros">Suministros</label>
                                                            <input type="checkbox" value="Suministros" id="Suministros">
                                                        </div>

                                                        <div class="group-check">
                                                            <label for="Partes">Partes</label>
                                                            <input type="checkbox" value="Partes" id="Partes">
                                                        </div>

                                                        <div class="group-check">
                                                            <label for="Servicios">Servicios</label>
                                                            <input type="checkbox" value="Servicios" id="Servicios">
                                                        </div>


                                                        <div class="group-check">
                                                            <label for="Papel">Papel</label>
                                                            <input type="checkbox" value="Papel" id="Papel">
                                                        </div>
                                                    </div>

                                                    <hr class="w-90">


                                                    <h4 class="mt-5 mb-4"><strong>Labores</strong></h4>
                                                    <div class="grop">
                                                        <div class="group-check">
                                                            <label for="admin">Administrador</label>
                                                            <input type="checkbox" value="Administrador" id="admin"
                                                                onchange="admin(this);">
                                                        </div>

                                                        <div class="group-check">
                                                            <label for="asesor">Asesor Tecnológico</label>
                                                            <input type="checkbox" value="asesor" id="asesor"
                                                                onchange="asesor(this);">
                                                        </div>

                                                        <div class="group-check">
                                                            <label for="operador">Operador</label>
                                                            <input type="checkbox" value="Operador" id="operador"
                                                                onchange="operador(this);">
                                                        </div>

                                                        <div class="group-check">
                                                            <label for="analista">Analista</label>
                                                            <input type="checkbox" value="Analista" id="analista"
                                                                onchange="analista(this);">
                                                        </div>


                                                        <div class="group-check">
                                                            <label for="supervisor">Supervisor</label>
                                                            <input type="checkbox" value="Supervisor" id="supervisor"
                                                                onchange="supervisor(this);">
                                                        </div>
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

                                            <div class="alquiler">

                                                <h4 class="mt-"><strong>Labores</strong></h4>
                                                <div class="input-group mb-4">
                                                    <div class="form-text" id="basic-addon4">Indexacion Mutuo Acuerdo</div>
                                                    <input type="text" class="form-" name="rif"
                                                        placeholder="Dedinir con el cliente" id="rif" aria-label="Username"
                                                        aria-describedby="basic-addon1" readonly value="">
                                                </div>

                                                <div class="form-text" id="basic-addon4">Indexacion Porcentaje
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="number" class="form" placeholder="%" value="0"
                                                        aria-label="Username" aria-describedby="basic-addon1">
                                                </div>


                                                <div class="form-text" id="basic-addon4">Indexacion Frecuencia</div>
                                                <select class="form-select bb form-select-sm mb-3 mt-3"
                                                    aria-label="Large select example">
                                                    <option selected></option>
                                                    <option value="1">Mensual</option>
                                                    <option value="2">Trimestre</option>
                                                    <option value="2">Semestre</option>
                                                    <option value="2">Anual</option>
                                                </select>


                                                <!--inputs show-->
                                                <div style="display: none;" id="InputAdministrador"
                                                    class="input-hidden mt-5">
                                                    <div class="form-text mt-4">Candidad
                                                        Administrador</div>
                                                    <div class="input-group mb-3">
                                                        <input type="Number" class="form"
                                                            placeholder="Unidades Administrador" aria-label="Username"
                                                            aria-describedby="basic-addon1" value="">
                                                    </div>
                                                </div>
                                                <!--inputs show-->

                                                <!--inputs show-->
                                                <div style="display: none;" id="InputAsesor" class="input-hidden">
                                                    <div class="form-text mt-4">Candidad Asesor</div>
                                                    <div class="input-group mb-3">
                                                        <input type="Number" class="form"
                                                            placeholder="Unidades Administrador" aria-label="Username"
                                                            aria-describedby="basic-addon1" value="">
                                                    </div>
                                                </div>
                                                <!--inputs show-->

                                                <!--inputs show-->
                                                <div style="display: none;" id="InputOperador" class="input-hidden">
                                                    <div class="form-text mt-4">Candidad Operador</div>
                                                    <div class="input-group mb-3">
                                                        <input type="Number" class="form" placeholder="Unidades Operador"
                                                            aria-label="Username" aria-describedby="basic-addon1" value="">
                                                    </div>
                                                </div>
                                                <!--inputs show-->


                                                <!--inputs show-->
                                                <div style="display: none;" id="InputAnalista" class="input-hidden">
                                                    <div class="form-text mt-4">Candidad Analista</div>
                                                    <div class="input-group mb-3">
                                                        <input type="Number" class="form" placeholder="Unidades Analista"
                                                            aria-label="Username" aria-describedby="basic-addon1" value="">
                                                    </div>
                                                </div>
                                                <!--inputs show-->

                                                <!--inputs show-->
                                                <div style="display: none;" id="InputSupervisor" class="input-hidden">
                                                    <div class="form-text mt-4">Candidad Supervisor</div>
                                                    <div class="input-group mb-3">
                                                        <input type="Number" class="form" placeholder="Unidades Supervisor"
                                                            aria-label="Username" aria-describedby="basic-addon1" value="">
                                                    </div>
                                                </div>
                                                <!--inputs show-->


                                                <!--form auto completado-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--vsita 01 se debe ajustar el responsivo-->
                                </div>
                            </div>
                            <!--vista 02-->





                            <div class="tab-pane" id="disabled-tabpanel-2" role="tabpanel" aria-labelledby="disabled-tab-2">
                                Tab 3 dfd</div>

                        </div>





                    </div>
                </div>

            </div>
            <!--VISTA-->



        </main>

    @endsection

</body>

</html>