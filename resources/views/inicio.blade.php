@extends('template.master')

@section('meta')
    <title>Contapp: Software Punto de Venta POS - Sistema Administrativo</title>
    <meta name="description"
          content="Lleva tu empresa a otro nivel con Contapp el mejor Software de Punto de Venta POS con el que podrás administrar tu negocio desde la nube.">
@stop

@section('contenido')
    <main id="main-container">
        <div class="bg-radial-gradient-blue">
            <section class="content content-full content-boxed overflow-hidden remove-padding">
                <!-- Section Content -->
                <div class="text-center portada">
                    <h1 class="h1 typer font-s64 font-w600 text-white push">Sistema POS y Administrativo</br>
                      para <span class="element"></span></h1>
                    <h2 class="h3 text-white-op push">Contapp es un software de punto de venta,
                      gestión de inventario, cuadre de caja, Informes y mucho más, que ayudará a
                      administrar fácilmente y hacer crecer su negocio.</h2>
                    <button data-toggle="modal" data-target="#sign-up-form" class="btn btn-primary animated bounceIn btn-noborder btn-lg">
                        Pruébalo ahora Gratis
                    </button>
                </div>
                <div class="row animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp">
                    <img src="{{ url('assets/img/portada.png') }}" width="100%" alt="software pos colombia" class="">
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <div class="bg-green">
          <section class="content content-full content-boxed overflow-hidden">
            <div class="col-sm-8 col-sm-offset-2 push-30-t">
              <h2 class="h1 font-s36 text-center font-w600 text-white">Toma el control de tu negocio con un <br> Sistema POS Online </h2>
<div class="col-sm-4 text-center">
  <img src="{{url('assets/img/benefit-time.svg')}}" alt="" />
  <p class="text-white font-s16">Ahorra tiempo automatizando cada uno de tus procesos de <b>facturación</b>,
     ten el control de tu empresa en tiempo real y desde cualquier lugar y dedicate a hacer lo que más te gusta</p>
</div>
<div class="col-sm-4 text-center">
  <img src="{{url('assets/img/benefit-cost.svg')}}" alt="" />
  <p class="text-white font-s16">Ahorra Dinero, optimiza tus niveles de inventario, no mas perdidas de dinero en Caja,
    regula tus gastos y más,  y sin invertir en costosas licencias, ni en servidores. </p>
</div>
<div class="col-sm-4 text-center">
  <img src="{{url('assets/img/benefit-happiness.svg')}}" alt="" />
  <p class="text-white font-s16">Si tu empresa mejora, aumenta sus ventas, ahorras dinero y tiempo y es mas rentable,
    tu tambien te pondrás feliz, Dedícate a hacer crecer tu negocio</p>
</div>
            </div>
                </section>

        </div>
        <div>
          <section class="contactenos">
            <div class="col-sm-4 padding-30">
                <div class="row push">
                  <div class="col-sm-4 text-center">
                      <img class="" width="88" height="100"
                      src="{{url('assets/img/correo.png')}}" alt="software
                      administrativo" /> </div>
                       <div class="col-sm-8 text-center">
                          <p
                      class="h3 font-w600 push-15-t">¿Tienes dudas?</p> <p
                      class="font-s16 font-w500">ventas@contapp.com.co</p>
                      </div>
                </div>
                <div class="row push">
                  <div class="col-sm-4 text-center">
                      <img class="" width="88" height="100" src="{{url('assets/img/telefono.png')}}" alt="software administrativo" />
                      </div>
                  <div class="col-sm-8 text-center">
                      <p class="h3 font-w600 push-15-t">¿Telefonos?</p>
                      <p class="font-s16 font-w500">315-578-0807 Y 314-553-5632</p>
                    </div>
                </div>
                <div class="row push">
                    <div class="col-sm-4 text-center">
                      <img class="" width="88" height="100" src="{{url('assets/img/lugar.png')}}" alt="software administrativo" />
                    </div>
                    <div class="col-sm-8 text-center">
                      <p class="h3 font-w600">¿Quieres visitarnos?</p>
                      <p class="font-s16 font-w500">Edf. ParqueSoft Calle 23 # 14-15 // Tercer Piso
                        Armenia, Quindío</p>
                    </div>

                </div>
            </div>
            <div class="col-sm-4 padding-30">
                {!! Form::open(['url' => 'foo/bar','class'=>'form-horizontal']) !!}
                <div class="form-group">
                  <div class="col-md-6">
                    {!! Form::text('name', null,['class'=>'form-control input-lg','placeholder'=>'Nombre completo']) !!}
                  </div>
                  <div class="col-md-6">
                    {!! Form::text('name', null,['class'=>'form-control  input-lg','placeholder'=>'Correo Electrónico']) !!}
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    {!! Form::textarea('name', null,['class'=>'form-control  input-lg',
                      'placeholder'=>'Mensaje','rows'=>'7']) !!}
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    {!! Form::submit('Enviar', ['class'=>'btn btn-block btn-green btn-lg']) !!}
                  </div>
                </div>
                  {!! Form::close() !!}
            </div>
            <div class="col-sm-4 padding-30">

<img class="img-responsive" src="{{url('assets/img/mapa.png')}}" alt="" />

            </div>
          </section>

        </div>
    </main>
@stop
