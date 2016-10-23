@extends('template.master')

@section('meta')
    <title>Contapp: Software Punto de Venta POS - Sistema Administrativo</title>
    <meta name="description"
          content="Lleva tu empresa a otro nivel con Contapp el mejor Software de Punto de Venta POS con el que podrás administrar tu negocio desde la nube.">
@stop

@section('contenido')
    <main id="main-container">
        <div class="bg-radial-gradient-blue">
            <section class="content content-full content-boxed overflow-hidden remove-padding remove-margin">
                <!-- Section Content -->
                <div class="text-center portada">
                    <h1 class="h1 font-s64 font-w600 text-white push">Sistema POS y Administrativo <span class="dn db-l"></span>para mejorar tu negocio</h1>
                    <h2 class="h5 text-white-op push">Subtitle.</h2>
                    <a href="#" data-modal="sign-up-form" class="btn btn-primary animated bounceIn btn-noborder btn-lg">
                        Pruebalo ahora Gratis
                    </a>
                </div>
                <div class="row animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp">
                    <img src="{{ url('assets/img/portada.png') }}" width="100%" class="">
                </div>
                <!-- END Section Content -->
            </section>
        </div>
    </main>
@stop

