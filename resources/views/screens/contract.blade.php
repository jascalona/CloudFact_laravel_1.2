@extends('layouts.structure')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudFact-Contrato</title>

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
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Contrato</li>
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



                @if ($message_e = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $message_e }}
                    </div>
                @endif

                <!--TABLE ORDEN-->
                <div class="col-md-15 mb-lg-0 mb-4">
                    <div class="card mt-4">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <h4 class="mb-0">Contratos</h4>
                                </div>

                                <div class="col-6 text-end mb-3">
                                    <a class="btn bg-gradient-dark mb-0" href="{{ route('Alquiler.store') }}"><i
                                    class='bx bx-plus'></i>&nbsp;&nbsp;Nuevo</a>
                                </div>
                            </div>
                        </div>

                        <div class="main p-5">

                            <div class="content-table">
                                <table id="myTable" class="display">
                                    <thead>
                                        <tr style="font-size: 13px;">
                                            <th class="text-center">Opciones</th>
                                            <th>N# Contrato</th>
                                            <th>Nombre</th>
                                            <th>Cliente</th>
                                            <th>RIF</th>
                                            <th>Vendedor</th>
                                            <th>Administrador</th>
                                            <th>Fecha de Inicio</th>
                                        </tr>
                                    </thead>


                                    <tbody>

                                        @foreach ($alquilers as $row)
                                            <tr style="font-size: 12px;">
                                                <td class="text-center">
                                                    <a href="{{ route('edit_alquiler.edit', $row->id) }}" class="btn btn-warning"><i class='bx bxs-edit-alt'></i></a>
                                                </td>
                                                <td>{{ $row->n_contract }}</td>
                                                <td>{{ $row->name_c }}</td>
                                                <td>{{ $row->cliente }}</td>
                                                <td>{{ $row->rif }}</td>
                                                <td>{{ $row->vendedor }}</td>
                                                <td>{{ $row->administrador }}</td>
                                                <td>{{ $row->date_init_contract }}</td>
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

        </main>

    @endsection

</body>

</html>