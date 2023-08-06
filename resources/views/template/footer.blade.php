<footer id="page-footer" class="bg-grey">
    <div class="content-boxed">
        <!-- Footer Navigation -->
        <div class="row padding-30">
          <div class="col-sm-4 text-center">
              <img alt="logo-contapp" src="https://static.contapp.com.co/contapp-web/logo.png" height="57" width="156">
              <div class="font-s14 padding-30 text-justify text-white-op">
                  <p>Somos una novedosa herramienta web que te permite conocer la
                    rentabilidad de tu negocio, administrar múltiples almacenes
                     e inventarios, todo desde la nube, teniendo el control
                      de su negocio.</p>
              </div>
          </div>

            <div class="col-sm-4">
                <h3 class="h4 font-w600 text-white-op text-center text-uppercase push-20">La Empresa</h3>
                <div class="padding-30">
                  <div class="col-md-6">
                    <ul class="list list-simple-mini font-s16">
                        <li>
                            <a class="font-w600" href="#inicio">Inicio</a>
                        </li>
                        <li>
                            <a class="font-w600" href="#caracteristicas">Características</a>
                        </li>
                        <li>
                            <a class="font-w600" href="#planes">Planes</a>
                        </li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <ul class="list list-simple-mini font-s16">
                        <li>
                            <a class="font-w600" href="https://app.contapp.com.co/demo">Demo</a>
                        </li>
                        <li>
                            <a class="font-w600" href="https://app.contapp.com.co/auth/login">Ingreso</a>
                        </li>
                    </ul>
                  </div>

                </diV>

            </div>
            <div class="col-sm-4 text-center">
              <h3 class="h4 font-w600 text-white-op text-center text-uppercase push-20">Siguenos en nuestras redes sociales</h3>
              <a href="#">
                  <span class="item item-circle bg-primary push-15-r">
                  <i class="fa fa-facebook"></i>
                  </span>
              </a>
              <a href="#">
                  <span class="item item-circle bg-info text-white push-15-r">
                  <i class="fa fa-twitter"></i>
                  </span>
              </a>
              <a href="#">
                  <span class="item item-circle bg-city text-white">
                  <i class="fa fa-youtube"></i>
                  </span>
              </a>
              <h3 class="h4 font-w600 text-white-op text-center text-uppercase push-20-t push-20">Quienes nos apoyan</h3>
<img class="img-responsive" height="53" alt="socios contapp" width="301" src="{{url('assets/img/apoyo.png')}}">
              </div>

        </div>
        <!-- END Footer Navigation -->
    </div>
    <div class="col-sm-12 bg-green-light">
      <!-- Copyright Info -->
      <div class="font-s20 text-center push-10-t push-15 clearfix">
        <p>Creado con <i class="fa fa-heart text-city"></i> en Colombia</p>
          <p>Contapp Nit:1001283353-3</p>
          <a class="text-decoration-none text-white" href="mailto:ventas@contapp.com.co" target="_blank">ventas@contapp.com.co</a>
      </div>
      <!-- END Copyright Info -->
    </div>

    <!-- Load Facebook SDK for JavaScript -->

</footer>
<script>
    var monthly = true

    function cambiarPeriodo() {
        $(".monthly, .yearly").toggleClass('hide');
        monthly = ! monthly
    }

    function suscribirme(plan) {
        $('#plan').val(plan)
        window.location.href = 'https://app.contapp.com.co/auth/register'
    }
</script>
