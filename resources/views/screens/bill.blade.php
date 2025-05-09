@extends('layouts.structure')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudFact-Bill</title>

    <!--STYLES-->
    <link rel="stylesheet" href="{{ asset('assets/table_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/setting.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/card.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/table.css') }}">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>


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

                <!--section create bill-->
                <div class="col-md-12 mb-lg-0 mb-4">
                    <div class="card mt-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <h4 class="mb-0">Nueva Orden</h4>
                                </div>
                                <div class="col-6 text-end mb-3">
                                    <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                            class='bx bxs-save'></i>&nbsp;&nbsp;Guardar Orden</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-3">
                            <div class="row new-contact">
                                <div class="col-md-6 mb-md-0 mb-4">
                                    <div
                                        class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">

                                        <select class="form-select form-select-lg mb-3" aria-label="Large select example">
                                            <option selected>Seleccione un Cliente</option>
                                            @foreach ($customers as $select)
                                                <option value="1">{{ $select->name }}</option>
                                            @endforeach
                                        </select>
                                    </div><br>

                                    <div class="col-md-">
                                        <div
                                            class="card card-body border card-plain border-radius-lg d-block align-items-center flex-row">
                                            <!--form auto completado-->
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-" placeholder="RIF" aria-label="Username"
                                                    aria-describedby="basic-addon1" readonly>
                                            </div>

                                            <div class="input-group mb-3">
                                                <input type="text" class="form-" placeholder="Direccion Fiscal"
                                                    aria-label="Username" aria-describedby="basic-addon1" readonly>
                                            </div>

                                            <div class="input-group mb-3">
                                                <input type="text" class="form-" placeholder="Ciudad" aria-label="Username"
                                                    aria-describedby="basic-addon1" readonly>
                                            </div>

                                            <div class="input-group mb-3">
                                                <input type="text" class="form-" placeholder="Persona de Contacto"
                                                    aria-label="Username" aria-describedby="basic-addon1" readonly>
                                            </div>

                                            <div class="input-group mb-3">
                                                <input type="text" class="form-" placeholder="Email" aria-label="Username"
                                                    aria-describedby="basic-addon1" readonly>
                                            </div>

                                            <div class="input-group mb-3">
                                                <input type="text" class="form-" placeholder="Movil" aria-label="Username"
                                                    aria-describedby="basic-addon1" readonly>
                                            </div><br>

                                            <!--form auto completado-->
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div
                                        class="card card-body border card-plain border-radius-lg d-block align-items-center flex-row">
                                        <!--form auto completado-->
                                        <div class="form-text" id="basic-addon4">Emision de Factura</div>
                                        <div class="input-group mb-3">
                                            <input type="date" class="form-" placeholder="Emision" aria-label="Username"
                                                aria-describedby="basic-addon1">
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-" placeholder="Tipo de Contrato"
                                                aria-label="Username" aria-describedby="basic-addon1" readonly>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-" placeholder="N# Contrato" aria-label="Username"
                                                aria-describedby="basic-addon1" readonly>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-" placeholder="N# Factura" aria-label="Username"
                                                aria-describedby="basic-addon1" readonly>
                                        </div>

                                        <div class="input-group mb-3">
                                            <input type="text" class="form-" placeholder="Click" aria-label="Username"
                                                aria-describedby="basic-addon1" readonly>
                                        </div>

                                        <!--form auto completado-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--section create bill-->

                <!--TABLE ORDEN-->
                <div class="col-md-15 mb-lg-0 mb-4">
                    <div class="card mt-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <h4 class="mb-0">Generar Orden</h4>
                                </div>

                                <div class="icons-pages col-6 text-end mb-3">
                                    <button id="scroll-button-left"><i class='bx bx-chevron-left'></i></button>
                                    <button id="scroll-button-right"><i class='bx bx-chevron-right'></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="main p-5">

                            <div class="content-table">
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
                        </div>
                    </div>
                </div>
                <!--TABLE ORDEN-->


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