<?php $__env->startSection('meta'); ?>
    <title>Contapp: Software Punto de Venta POS - Sistema Administrativo</title>
    <meta name="description"
          content="Lleva tu empresa a otro nivel con Contapp el mejor Software de Punto de Venta POS con el que podrás administrar tu negocio desde la nube.">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <main id="main-container">
        <div class="bg-radial-gradient-blue">
            <section class="content content-full content-boxed overflow-hidden remove-padding">
                <!-- Section Content -->
                <div class="text-center portada">
                    <h1 class="h1 typer font-s64 font-w600 text-white push">Sistema POS y Administrativo</br>
                      para <span class="element"></span></h1>
                    <h2 class="h3 text-white-op push">Ten el control de tu empresa desde cualquier lugar, Rápido, Seguro, Usable.</h2>
                    <button data-toggle="modal" data-target="#sign-up-form" class="btn btn-primary animated bounceIn btn-noborder btn-lg">
                        Pruébalo ahora Gratis
                    </button>
                </div>
                <div class="row animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp">
                    <img src="<?php echo e(url('assets/img/portada.png')); ?>" width="100%" alt="software pos colombia" class="">
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <div>
          <section class="">
            <div class="col-sm-4 padding-30">
                <div class="row push">
                  <div class="col-sm-4 text-center">
                      <img class="" width="88" height="100"
                      src="<?php echo e(url('assets/img/correo.png')); ?>" alt="software
                      administrativo" /> </div>
                       <div class="col-sm-8 text-center">
                          <p
                      class="h3 font-w600 push-15-t">¿Tienes dudas?</p> <p
                      class="font-s16 font-w500">ventas@contapp.com.co</p>
                      </div>
                </div>
                <div class="row push">
                  <div class="col-sm-4 text-center">
                      <img class="" width="88" height="100" src="<?php echo e(url('assets/img/telefono.png')); ?>" alt="software administrativo" />
                      </div>
                  <div class="col-sm-8 text-center">
                      <p class="h3 font-w600 push-15-t">¿Telefonos?</p>
                      <p class="font-s16 font-w500">315-578-0807 Y 314-553-5632</p>
                    </div>
                </div>
                <div class="row push">
                    <div class="col-sm-4 text-center">
                      <img class="" width="88" height="100" src="<?php echo e(url('assets/img/lugar.png')); ?>" alt="software administrativo" />
                    </div>
                    <div class="col-sm-8 text-center">
                      <p class="h3 font-w600">¿Quieres visitarnos?</p>
                      <p class="font-s16 font-w500">Edf. ParqueSoft Calle 23 # 14-15 // Tercer Piso
                        Armenia, Quindío</p>
                    </div>

                </div>
            </div>
            <div class="col-sm-4 padding-30">
                <?php echo Form::open(['url' => 'foo/bar','class'=>'form-horizontal']); ?>

                <div class="form-group">
                  <div class="col-md-6">
                    <?php echo Form::text('name', null,['class'=>'form-control input-lg','placeholder'=>'Nombre completo']); ?>

                  </div>
                  <div class="col-md-6">
                    <?php echo Form::text('name', null,['class'=>'form-control  input-lg','placeholder'=>'Correo Electrónico']); ?>

                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <?php echo Form::textarea('name', null,['class'=>'form-control  input-lg',
                      'placeholder'=>'Mensaje','rows'=>'7']); ?>

                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-12">
                    <?php echo Form::submit('Enviar', ['class'=>'btn btn-block btn-green btn-lg']); ?>

                  </div>
                </div>
                  <?php echo Form::close(); ?>

            </div>
            <div class="col-sm-4">

            </div>
          </section>

        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>