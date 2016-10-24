<header id="header-navbar" class="content-mini content-mini-full">
    <div class="content-boxed ">

        <div class="row ">
            <!-- Header Navigation Left -->
            <div class="col-md-4 text-center push">
                <ul class="nav-header tc">
                    <li class="header-content">
                        <a href="{{url('/')}}">
                            <img class="img-responsive" src="https://static.contapp.com.co/contapp-web/logo.png" alt="contapp sistema pos" width="156" height="57">
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Header Navigation Left -->
            <div class="col-md-8 text-center">
                <!-- Main Header Navigation -->
                <ul class="nav-header navbar-centered push-10-t tc">
                    <li>
                        <a class="text-white font-s16 font-w400" href="#">Características</a>
                    </li>
                    <li>
                        <a class="text-white font-s16 font-w400" href="#">Planes</a>
                    </li>
                    <li>
                        <a class="text-white font-s16 font-w400" href="#">Login</a>
                    </li>
                    <li class="hidden-xs">
                        <button class="btn btn-primary btn-noborder font-s16 font-w400" data-toggle="modal" data-target="#sign-up-form">Empieza Gratis</button>
                    </li>
                </ul>
                <!-- END Main Header Navigation -->
            </div>
        </div>

    </div>
</header>
<div id="sign-up-form" class="modal in formulario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="block">
                <div class="block-content padding-30  bg-green-light">
                  <h4 class="h1 font-w600 text-center text-white">Tus 30 Días GRATIS</h4>
                  <h4 class="h3 font-w500 text-center text-white">¡Consiguelo Ahora!</h4>
                  <div class="push-20-t">
                      {!! Form::open(['url' => 'foo/bar','class'=>'form-horizontal']) !!}
                      <div class="form-group">
                        <div class="col-md-12">
                          {!! Form::text('name', null,['class'=>'form-control font-s20 input-lg','placeholder'=>'Ingrese su Nombre']) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          {!! Form::email('email', null,['class'=>'form-control font-s20 input-lg',
                            'placeholder'=>'Ingrese su correo electrónico']) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          {!! Form::text('telefono', null,['class'=>'form-control font-s20 input-lg',
                            'placeholder'=>'Ingrese su número telefónico']) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          {!! Form::text('empresa', null,['class'=>'form-control font-s20 input-lg',
                            'placeholder'=>'Nombre de su empresa']) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          {!! Form::text('ciudad', null,['class'=>'form-control font-s20 input-lg',
                            'placeholder'=>'Ciudad de ubicación']) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-12">
                          {!! Form::submit('Empieza ahora', ['class'=>'btn btn-block btn-green btn-lg font-s20']) !!}
                        </div>
                      </div>
                      {!! Form::close() !!}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
