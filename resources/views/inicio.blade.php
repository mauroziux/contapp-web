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
                    <button data-toggle="modal" data-target="#sign-up-form"
                     class="btn btn-primary animated font-s26 bounceIn  btn-lg">
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
        <div class="bg-primary-darker">
            <section class="content content-full content-boxed overflow-hidden flex" >

          <div class="col-sm-7" >
            <div class="" style="display: inline;">
      <div class="relative" style="position:relative">
        <svg class="db w-100" viewBox="500 6340 996 710" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path id="a" d="M.217.775h614.65V819.74H.217z"></path></defs><g fill="none" fill-rule="evenodd" transform="rotate(90 -2422.5 3917.5)"><rect fill="#D1D5DA" x="10" width="699.481" height="993.316" rx="36.8"></rect><rect fill="#EBEDEF" width="699.481" height="993.316" rx="36.8"></rect><ellipse cx="6.403" cy="6.704" rx="6.002" ry="5.998" transform="translate(343.338 39.59)" fill="#FFF" opacity=".4"></ellipse><ellipse fill="#D1D5DA" cx="349.741" cy="952.128" rx="24.01" ry="23.993"></ellipse><use fill="#6D8199" xlink:href="#a" transform="translate(43 88)"></use></g></svg>
        <div class="absolute overflow-hidden" style="left: 8.742632612967%; right: 9.037328094303%; top: 6.068965517241%; bottom: 7.172413793103%;">
          <video width="100%" height="100%" autoplay="" loop="" muted="">
            <source src="{{url('assets/video/ventas.mp4')}}" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
          </div>
          <div class="col-sm-5 padding-30 v-center ">
<h2 class="h1 font-s36 text-center text-white push">El sistema POS perfecto para ti</h2>
<p class="text-white-op font-s16">Imagina poder atender a tu cliente desde tu tablet, responder sus preguntas y asesorarlo de manera inmediata,
   además poder facturar y todo de una manera mas personalizada.</p>
   <p class="text-white-op font-s16">
     <b>Contapp</b> hace que vender sea más facil a sus clientes,  <em>descarga de su inventario</em>,
     <em>organiza su caja</em>, <em>alimenta todos los reportes,</em> todo esto de manera inmediata desde su PC, Tablet o celular.
   </p>
   <div class="text-center">
     <button class="btn btn-primary btn-lg" name="button">Ver Características de POS</button>
   </div>

          </div>
            </section>
          </div>
          <div class="bg-radial-gradient-blue">
                <section class="content content-full content-boxed overflow-hidden flex" >
                  <div class="col-sm-6 padding-30 v-center">
                    <h2 class="h1 font-s36 text-center text-white">Multiusuario y Multitienda</h2>
                    <h3 class="text-center text-white-op push">Trabaja con tu equipo</h3>
                    <p class="text-white-op font-s16">Gestiona todo tu equipo de trabajo, vendedores, auxiliar de bodega,
                       puedes dar acceso a tu contador, siempre verás lo que hacen, .</p>
                       <p class="text-white-op font-s16">
                         ¿Preparado para crecer? <b>Con el sistemas POS Contapp</b> podras gestionar todas tus tiendas a la
                         perfección, saber que sucede en cada tienda por separado y saber cual es la mas rentable.
                          todos tus datos estan centralizados, precios, productos, niveles de Stock, sin dolores de cabeza.
                       </p>
                       <div class="text-center">
                         <button class="btn btn-primary btn-lg" name="button">Ver más características</button>
                       </div>
                  </div>

                  <div class="col-sm-6 v-center">
<img class="img-responsive" src="{{url('assets/img/team.png')}}" alt="sistemas pos multiusuario y multitienda" />
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
