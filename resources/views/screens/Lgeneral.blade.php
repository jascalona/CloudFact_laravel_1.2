@extends('layouts.structure')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudFact-Lead-General</title>

    <!--STYLES-->
    <link rel="stylesheet" href="{{ asset('assets/table_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/setting.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/card.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/table.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!--STYLES-->

    <!--SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <!--SCRIPTS-->

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
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Lectura General</li>
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


                <!--SECTION GENERAL-->
                <div class="container-fluid py-2 mb-6">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">

                                <div class="col-md-12 mb-lg-0 mb-4">
                                    <div class="card">
                                        <div class="card-header pb-0 p-3">
                                            <div class="row">
                                                <div class="col-6 d-flex align-items-center">
                                                    <h4 class="mb-0">Informe Detallado Global</h4>
                                                </div>


                                                <div class="col-6 mb-2 text-end">
                                                    <div class="advanced">

                                                        <!-- Button modal Activation-->
                                                        <button type="button" class="btn btn-dark text-center"
                                                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                            <i style="" class='bx bx-cog'></i>
                                                        </button>
                                                        <!-- Button modal Activation-->

                                                        <!-- Modal -->
                                                        <div class="modal fade text-start" id="exampleModal" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                            <strong>Opciones Avanzadas</strong>
                                                                        </h1>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>


                                                                    <div class="modal-body">

                                                                        <h4>Descargar Plantillas</h4>
                                                                        <p>Aquí puede descargar la Plantilla de Importación
                                                                        </p>
                                                                        <a href="" data-bs-toggle="tooltip"
                                                                            title="Tooltip">Descargar</a>


                                                                        <hr>

                                                                        <h4>Importar .CSV</h4>
                                                                        <p>Realice la carga de lecturas através de un CSV.
                                                                        </p>

                                                                        <form action="" method="post"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            <div class="file-input text-center">
                                                                                <input type="file" accept=".csv" name="file"
                                                                                    id="file-input" class="form-control"
                                                                                    required />
                                                                                <label class="file-input__label"
                                                                                    for="file-input">
                                                                            </div>


                                                                            <div class="text-start mt-2">
                                                                                <button type="submit" name="subir"
                                                                                    id="btn_load"
                                                                                    onclick="load_reading_general();"
                                                                                    class="btn btn-dark"
                                                                                    value="submit">Cargar
                                                                                    .CSV</button>
                                                                            </div>
                                                                        </form>

                                                                        <hr>

                                                                        <h4>Carga Manual</h4>
                                                                        <p>Realice la carda de lecturas manual</p>
                                                                        <a href="../modelos/vistas/form_manual.php"
                                                                            data-bs-toggle="tooltip"
                                                                            title="Tooltip">Realizar Carga</a>

                                                                        <hr>
                                                                        <h4>Exportar .XLS</h4>
                                                                        <p>Exportar Lecturas Globales</p>

                                                                        <div class="text-start mt-4">
                                                                            <form action="" method="POST">
                                                                                <a href="../CONTROLLER/Export_data.php"
                                                                                    name="export" id="export"
                                                                                    class="btn btn-dark"
                                                                                    value="Submit">Exportar .XLS</a>
                                                                            </form>
                                                                        </div>


                                                                    </div>


                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Cerrar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal -->

                                                    </div>


                                                </div>



                                            </div>
                                        </div>
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-md-6 mb-md-0 mb-4">
                                                    <div
                                                        class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                                                        <img class="w-10 me-3 mb-0" src="{{ asset('images/xdv.png') }}"
                                                            alt="logo">
                                                        <h6 class="mb-0">
                                                            Total de CLientes: 52
                                                        </h6>
                                                        <i style="font-size: 20px"
                                                            class="bx bx-group ms-auto text-dark cursor-pointer"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"></i>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--SECTION GENERAL-->



                <div class="main p-5">

                    @if (session('success'))
                        <div class="alert alert-success" role="aler">
                            {{ session('success') }}
                        </div>
                    @endif


                    <!--TABLE ORDEN-->
                    <div class="col-md-15 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <div class="card-header pb-0 p-3">
                                <div class="row">
                                    <div class="col-6 d-flex align-items-center">
                                        <h4 class="mb-0">Customer's: <small>Lead</small></h4>
                                    </div>

                                    <div class="icons-pages col-6 text-end mb-3">
                                        <button id="scroll-button-left"><i class='bx bx-chevron-left'></i></button>
                                        <button id="scroll-button-right"><i class='bx bx-chevron-right'></i></button>
                                    </div>
                                </div>
                            </div>

                            <!--TABLE ORDEN-->
                            <div class="main p-5">

                                <div class="content-table">
                                    <table id="myTable" class="display">
                                        <thead>
                                            <tr style="font-size: 13px;">
                                                <th class="text-center">Opciones</th>
                                                <th>Cliente</th>
                                                <th>RIF</th>
                                                <th>Serial</th>
                                                <th>Modelo</th>
                                                <th>Localidad</th>
                                                <th>Date</th>
                                                <th>Cont. Anterior B/N</th>
                                                <th>Cont. Actual B/N</th>
                                                <th>Volum. B/N</th>
                                                <th>AMCV_bn</th>
                                                <th>Cont. Anterior Color</th>
                                                <th>Cont. Actual Color</th>
                                                <th>Volum. Color</th>
                                                <th>AMCV_color</th>
                                                <th>Cont. Anterior ScanImages</th>
                                                <th>Cont. Actual ScanImages</th>
                                                <th>Volum. Scan Images</th>
                                                <th>Cont. Anterior ScanJobs</th>
                                                <th>Cont. Actual ScanJobs</th>
                                                <th>Volum. Scan Jobs</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($Lgenals as $row_Lgeneal)
                                                <tr style="font-size: 12px;">
                                                    <td class="text-center">
                                                        <button class="btn btn-warning"><i class='bx bxs-edit-alt'></i></button>
                                                        <button class="btn btn-danger"><i class='bx bxs-trash-alt'></i></button>
                                                    </td>
                                                    <td>{{ $row_Lgeneal->cliente }}</td>
                                                    <td>{{ $row_Lgeneal->rif }}</td>
                                                    <td>{{ $row_Lgeneal->serial }}</td>
                                                    <td>{{ $row_Lgeneal->model }}</td>
                                                    <td>{{ $row_Lgeneal->location }}</td>
                                                    <td>{{ $row_Lgeneal->date }}</td>
                                                    <td>{{ $row_Lgeneal->cont_ante_bn }}</td>
                                                    <td>{{ $row_Lgeneal->cont_actu_bn }}</td>
                                                    <td>{{ $row_Lgeneal->volum_bn }}</td>
                                                    <td>{{ $row_Lgeneal->AMCV_bn }}</td>
                                                    <td>{{ $row_Lgeneal->cont_ante_color }}</td>
                                                    <td>{{ $row_Lgeneal->cont_actu_color }}</td>
                                                    <td>{{ $row_Lgeneal->volum_color }}</td>
                                                    <td>{{ $row_Lgeneal->AMCV_color }}</td>
                                                    <td>{{ $row_Lgeneal->cont_ante_scan_images }}</td>
                                                    <td>{{ $row_Lgeneal->cont_actu_scan_images }}</td>
                                                    <td>{{ $row_Lgeneal->volum_scan_images }}</td>
                                                    <td>{{ $row_Lgeneal->cont_ante_scan_jobs }}</td>
                                                    <td>{{ $row_Lgeneal->cont_actu_scan_jobs }}</td>
                                                    <td>{{ $row_Lgeneal->volum_scan_jobs }}</td>

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

    @endsection

</body>

</html>