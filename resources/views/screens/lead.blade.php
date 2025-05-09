@extends('layouts.structure')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudFact-Lead</title>

    <!--STYLES-->
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
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Lecturas</li>
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
                                                    <a class="btn bg-gradient-dark mb-0" href="{{ route('Lgeneral') }}"><i
                                                            class='bx bxs-book-open'></i></a>
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



                <div style="" class="container-card-lead">

                    @foreach ($customers as $row)
                        <!--CARDS-->
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                <div class="card-header p-2 ps-3">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p class="text-sm mb-0 text-capitalize">{{ $row->cliente }}</p>
                                            <h4 class="mb-0 mt-3">{{ $row->rif }}</h4>
                                        </div>
                                        <div
                                            class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                                            <i class='bx bxs-bar-chart-alt-2'></i>
                                        </div>
                                    </div>
                                </div>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer p-2 ps-3">
                                    <p class="mb-0 text-sm">Equipos: <span
                                            class="text-success font-weight-bolder">{{ $row->cant_device }} </span></p>
                                    <span><a href="{{ route('LCustomer', $row->id) }}">Detalles</a></span>
                                </div>
                            </div>
                        </div>

                        <!--CARDS-->
                    @endforeach
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