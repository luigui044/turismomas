@extends('layouts.layout-master')

@section('banner')
    @include('components.general-navbar')
    @include('components.video-banner')
@endsection


@section('content')
    <section class="mt-5">
        <div class="container">
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-md-12">
                    <h1 class="clase-verdana2"> Todo lo que buscas lo encuentras aquí. <span class="clase-verdana"
                            style="color:#86CBE8;font-size:30px" id="texto-cambiante"></span> </h1>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-md-10" id="seccion-buscador">
                    <div class="input-group input-group-lg mb-3 ">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Qué</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Ejemplo: comida, servicio, barbería, hotel"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Dondé &nbsp; <i
                                    class="fas fa-map-marker-alt"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Tu Ciudad..."
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        <button type="button" class="btn btn-sm text-white "
                            style="background: #087C7C; border-radius:5px;font-size:13px;"><b>BUSCAR</b></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="custom-shape-divider-top-1702517294">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <section id="paises" style="background: #E3E3E3">
        <div class="container">
            <div class="row mb-3 ">
                <div class="col-md-12 text-center">

                    <h2 class="clase-verdana">¿Qué país deseas visitar?</h2>
                </div>
            </div>
            <div class="row country-row-cards  justify-content-center  text-center">
                @foreach ($paises as $item)
                    @include('components.country-cards', [
                        'pais' => $item->des_pais,
                        'url' => 'img/paises/' . $item->cod_pais . '.jpg',
                    ])
                @endforeach
            </div>
        </div>
    </section>
    <section class="dividergray">
        <div class="custom-shape-divider-top-17025172942">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <section id="conversor-monedas">
        <div class="container">
            <div class="row mb-3 ">
                <div class="col-md-12 text-center">

                    <h2 class="clase-verdana">Conversor de Moneda</h2>
                </div>

            </div>
            <div class="row justify-content-center text-center">
                <div class="col-md-9">
                    @include('components.conversor')
                </div>
            </div>
        </div>
    </section>
    <section id="registro-empresas mt-3">
        <div class="container">
            <div class="row mb-3 ">
                <div class="col-md-12 text-center">

                    <h2 class="clase-verdana">
                        Registro GRATIS para empresas de Turismo
                    </h2>
                </div>
            </div>
            <div class="row mt-3justify-content-center text-center">
                <div class="col-md-4">
                    <a href="#"> <img src="{{ asset('img/registro.png') }}" class="hvr-wobble-horizontal"
                            alt="" width="50%">
                        <p class="clase-verdana " style="color:#86CBE8;font-size:20px">REGISTRO GRATIS</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#"> <img src="{{ asset('img/ventajas.png') }}" class="hvr-wobble-horizontal"
                            alt="" width="50%">
                        <p class="clase-verdana " style="color:#86CBE8;font-size:20px">VENTAJAS</p>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#"> <img src="{{ asset('img/clientes.png') }}" class="hvr-wobble-horizontal"
                            alt="" width="50%">
                        <p class="clase-verdana " style="color:#86CBE8;font-size:20px">LLEGA A MÁS CLIENTES</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            var list = ['¡Restaurantes!', '¡Volcanes!', '¡Hoteles!', '¡Playas!']; // list of blurbs 
            var txt = $('#texto-cambiante'); // The container in which to render the list
            var index = 0;
            var duracionFade = 1000; // Duración del efecto de fade in/out en milisegundos

            function cambiarPalabra() {
                txt.fadeOut(duracionFade, function() {
                    $(this).text(list[index]).fadeIn(duracionFade);
                });

                index = (index + 1) % list.length;
            }

            // Llamada inicial y programación del intervalo
            cambiarPalabra();
            setInterval(cambiarPalabra, duracionFade * 2 + 200);

        });
    </script>
@endsection


@section('footer')
    <!-- Footer -->
    <footer class="page-footer font-small  mt-5" style="background-color:#54A3A4">

        <div style="background-color: #F12010;">
            <div class="container">


                <div class="row justify-content-center py-3 text-center d-flex align-items-center">

                    <div class="col-md-2">
                        <a href="" class="text-white"><b>Noticias</b></a>
                    </div>
                    <div class="col-md-2">
                        <a href="" class="text-white"><b>Servicio al cliente</b></a>
                    </div>
                    <div class="col-md-2">
                        <a href="" class="text-white"><b>Contáctanos</b></a>
                    </div>
                    <div class="col-md-2">
                        <a href="" class="text-white"><b>Portada</b></a>
                    </div>

                </div>

            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

            <!-- Grid row -->
            <div class="row mt-3 text-center">
                <div class="col-md-12">
                    Copyright © 2022 | Todos los derechos reservados. Turismo Más <i
                        class="fas fa-circle mx-2"></i>Gatineau, Quebec, Canada. <i class="fas fa-circle mx-2"></i> Tel
                    Phone: 819-775-0873 El Salvador (503) 60000613
                </div>
                <div class="col-md-12">
                    Buscador mundial de Turismo
                </div>
            </div>

        </div>

    </footer>
    <!-- Footer -->
@endsection
