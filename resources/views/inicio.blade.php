@extends('template.master')

@section('meta')
    <title>Contapp: Software Punto de Venta POS y Facturación electrónica Colombia</title>
    <meta name="description"
          content="Lleva tu empresa a otro nivel con Contapp el mejor Software de Punto de Venta, sistema POS y facturacion electrónica con el que podrás administrar tu negocio desde la nube.">
@stop

@section('contenido')
    <main id="main-container">
        <div class="bg-radial-gradient-blue" id="inicio">
            <section class="content content-full content-boxed overflow-hidden remove-padding">
                <!-- Section Content -->
                <div class="text-center portada">
                    <h1 class="h1 typer font-s64 font-w600 text-white push">Sistema POS, facturación electrónica y Administrativo</br>para
                        <span class="element"></span></h1>
                    <h2 class="h3 text-white-op push content-boxed ">Contapp es un software de punto de venta, gestión
                        de inventario, cuadre de caja, Informes y mucho más, que ayudará a administrar fácilmente y
                        hacer crecer su negocio.</h2>

                    <h3 class="h3 text-white-op push content-boxed ">Ahora con factura electronica ilimitada GRATIS y POS electrónico nunca fue más fácil tomar una decisión.</h3>
                    <a target="_blank" href="https://app.contapp.com.co">
                        <button data-toggle="modal" data-target="#sign-up-form"
                                class="btn btn-primary animated font-s26 bounceIn  btn-lg">
                            Pruébalo ahora Gratis
                        </button>
                    </a>
                </div>
                <div class="row animated fadeInUp" data-toggle="appear" data-class="animated fadeInUp">
                    <img src="https://static.contapp.com.co/contapp-web/portada.png" width="100%" alt="software pos colombia" class="">
                </div>
                <!-- END Section Content -->
            </section>
        </div>
        <div class="bg-green">
            <section class="content content-full content-boxed overflow-hidden">
                <div class="col-md-8 col-md-offset-2 col-sm-12 push-30-t">
                    <h2 class="h1 font-s36 text-center font-w600 text-white">Toma el control de tu negocio con un <br>
                        Sistema POS Online </h2>
                    <div class="content-boxed">
                        <div class="col-sm-4 text-center">
                            <img src="https://static.contapp.com.co/contapp-web/benefit-time.svg" alt="ahorra tiempo con el sistema pos"/>
                            <p class="text-white font-s16">Ahorra tiempo automatizando cada uno de tus procesos de <b>facturación electrónica</b>,
                                ten el control de tu empresa en tiempo real y desde cualquier lugar y dedicate a hacer
                                lo que más te gusta</p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <img src="https://static.contapp.com.co/contapp-web/benefit-cost.svg" alt="sistema pos mas economico"/>
                            <p class="text-white font-s16">Ahorra Dinero, optimiza tus niveles de inventario, no mas
                                perdidas de dinero en Caja, regula tus gastos y más, y sin invertir en costosas
                                licencias, ni en servidores. </p>
                        </div>
                        <div class="col-sm-4 text-center">
                            <img src="https://static.contapp.com.co/contapp-web/benefit-happiness.svg" alt="software POS para tiendas"/>
                            <p class="text-white font-s16">Si tu empresa mejora, aumenta sus ventas, ahorras dinero y
                                tiempo y es mas rentable, tu tambien te pondrás feliz, Dedícate a hacer crecer tu
                                negocio</p>
                        </div>
                    </div>

                </div>
            </section>

        </div>
        <div class="bg-primary-darker" id="caracteristicas">
            <div class=" content-boxed">
                <section class="content content-full content-boxed overflow-hidden flex">
                    <div class="col-sm-7">
                        <div class="" style="display: inline;">
                            <div class="relative" style="position:relative">
                                <svg class="db w-100" viewBox="500 6340 996 710" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <path id="a" d="M.217.775h614.65V819.74H.217z"></path>
                                    </defs>
                                    <g fill="none" fill-rule="evenodd" transform="rotate(90 -2422.5 3917.5)">
                                        <rect fill="#D1D5DA" x="10" width="699.481" height="993.316" rx="36.8"></rect>
                                        <rect fill="#EBEDEF" width="699.481" height="993.316" rx="36.8"></rect>
                                        <ellipse cx="6.403" cy="6.704" rx="6.002" ry="5.998" transform="translate(343.338 39.59)" fill="#FFF" opacity=".4"></ellipse>
                                        <ellipse fill="#D1D5DA" cx="349.741" cy="952.128" rx="24.01" ry="23.993"></ellipse>
                                        <use fill="#6D8199" xlink:href="#a" transform="translate(43 88)"></use>
                                    </g>
                                </svg>
                                <div class="absolute overflow-hidden" style="left: 8.742632612967%; right: 9.037328094303%; top: 6.068965517241%; bottom: 7.172413793103%;">
                                    <video width="100%" height="100%" autoplay="" loop="" muted="">
                                        <source src="https://static.contapp.com.co/contapp-web/ventas.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 padding-30 v-center ">
                        <h2 class="h1 font-s36 text-center text-white push">El sistema POS perfecto para ti</h2>
                        <p class="text-white-op font-s16">Imagina poder atender a tu cliente desde tu tablet, responder
                            sus preguntas y asesorarlo de manera inmediata, además poder facturar electrónicamente sea POS o factura normal y todo de una manera
                            más personalizada.</p>
                        <p class="text-white-op font-s16">
                            <b>Contapp</b> hace que vender sea más fácil a sus clientes, <em>descarga de su
                                inventario</em>, <em>organiza su caja</em>, <em>alimenta todos los reportes,</em> todo
                            esto de manera inmediata desde su PC, Tablet o celular.
                        </p>
                        <div class="text-center">
                            <button class="btn btn-primary btn-lg" name="button">Ver Características de POS</button>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="bg-green-light">
            <div class="content-boxed">
                <section class="content content-full  overflow-hidden">
                    <div class="col-md-8 col-md-offset-2 col-sm-12">
                        <div class="tabbed-carousel__nav" data-toggle="tabs">
                            <a class="tabbed-carousel__nav-item" href="#vender"> <i class="fa fa-tags fa-2x icon"></i>
                                Vender </a> <a class="tabbed-carousel__nav-item" href="#gestionar">
                                <i class="fa fa-pencil fa-2x icon"></i> Gestionar </a>
                            <a class="tabbed-carousel__nav-item" href="#informes">
                                <i class="fa fa-bar-chart fa-2x icon"></i> Informes </a>
                            <a class="tabbed-carousel__nav-item" href="#crecer"> <i class="fa fa-rocket fa-2x icon"></i>
                                Crecer </a>
                        </div>
                    </div>
                </section>
                <section class="overflow-hidden" style="">
                    <div class="row">
                        <div class="block-content tab-content remove-padding">
                            <div class="tab-pane active" id="vender">
                                <div class="col-sm-6">
                                    <div class=" block-content text-center block-content-full animated bounceInLeft">
                                        <div class="col-lg-8 col-lg-offset-4 col-md-10 col-md-offset-2 col-sm-12">
                                            <h3 class="h1 font-s36 text-center text-white">El sistema POS listo para
                                                vender</h3>
                                            <div class=" text-right">
                                                <blockquote>
                                                    <p class="font-s16">Crea y agrega productos o servicios rapidamente,
                                                        cambia sus cantidades o precios en cualquier momento y listo,
                                                        imprime o envia la factura por correo electrónico. ahorra dinero
                                                        en papel y ayudas al medio ambiente.
                                                    </p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <img class="img-responsive animated bounceInRight" src="https://static.contapp.com.co/contapp-web/ventas.png" alt="sistema punto de venta"/>
                                </div>
                            </div>
                            <div class="tab-pane" id="gestionar">
                                <div class="col-sm-6">
                                    <div class=" block-content text-center block-content-full animated bounceInLeft">
                                        <div class="col-lg-8 col-lg-offset-4 col-md-10 col-md-offset-2 col-sm-12">
                                            <h3 class="h1 font-s36 text-center text-white">Todo un CRM en tu mano</h3>
                                            <div class=" text-right">
                                                <blockquote>
                                                    <p class="font-s16">Maneja todos tus contactos, clientes y
                                                        proveedores, recuerdale a tus clientes cuando deben pagar,
                                                        maneja tus cuentas por cobrar con tus proveedores, y recibe
                                                        notificaciones de cuando pagarlas, todo en un solo <strong>Sistema
                                                            POS y Administrativo</strong>.
                                                    </p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <img class="img-responsive animated bounceInRight" src="https://static.contapp.com.co/contapp-web/clientes.png" alt="sistema punto de venta"/>
                                </div>
                            </div>
                            <div class="tab-pane" id="informes">
                                <div class="col-sm-6">
                                    <div class=" block-content text-center block-content-full animated bounceInLeft">
                                        <div class="col-lg-8 col-lg-offset-4 col-md-10 col-md-offset-2 col-sm-12">
                                            <h3 class="h1 font-s36 text-center text-white">Informe de ventas y
                                                rentabilidad</h3>
                                            <div class=" text-right">
                                                <blockquote>
                                                    <p class="font-s16">Reportes detallados de su negocio ayudarán a
                                                        tomar mejores decisiones estratégicas, <b>estado de
                                                            resultados</b>, mejores clientes, <em>rentabilidad de su
                                                            negocios</em>, productos mas vendidos, todo esto a un simple
                                                        click con el <b>sistemas POS Contapp.</b>
                                                    </p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <img class="img-responsive animated bounceInRight" src="https://static.contapp.com.co/contapp-web/graficas.png" alt="sistema punto de venta"/>
                                </div>
                            </div>
                            <div class="tab-pane" id="crecer">
                                <div class="col-sm-6">
                                    <div class=" block-content text-center block-content-full animated bounceInLeft">
                                        <div class="col-lg-8 col-lg-offset-4 col-md-10 col-md-offset-2 col-sm-12">
                                            <h3 class="h1 font-s36 text-center text-white">Lleva tu empresa a otro
                                                nivel</h3>
                                            <div class=" text-right">
                                                <blockquote>
                                                    <p class="font-s16">Automatiza todos tus procesos, haz crecer tu
                                                        negocio con información inmediata e inteligente de tu empresa,
                                                        empieza hoy mismo, <b>Dedícate a lo que amas</b>, nosotros nos
                                                        encargamos del resto.
                                                    </p>
                                                </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <img class="img-responsive animated bounceInRight" src="https://static.contapp.com.co/contapp-web/crecer.png" alt="sistema punto de venta"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
        <div class="bg-radial-gradient-blue">
            <div class="content-boxed">
                <section class="content content-full  overflow-hidden flex">
                    <div class="col-sm-6 padding-30 v-center multiusuarios-text">
                        <h2 class="h1 font-s36 text-center text-white">Multiusuario y Multitienda</h2>
                        <h3 class="text-center text-white-op push">Trabaja con tu equipo</h3>
                        <p class="text-white-op font-s16">Gestiona todo tu equipo de trabajo, vendedores, auxiliar de
                            bodega, puedes dar acceso a tu contador, siempre verás lo que hacen, .</p>
                        <p class="text-white-op font-s16">
                            ¿Preparado para crecer? <b>Con el sistemas POS Contapp</b> podras gestionar todas tus
                            tiendas a la perfección, saber que sucede en cada tienda por separado y saber cual es la mas
                            rentable. todos tus datos estan centralizados, precios, productos, niveles de Stock, sin
                            dolores de cabeza.
                        </p>
                        <div class="text-center">
                            <button class="btn btn-primary btn-lg" name="button">Ver más características</button>
                        </div>
                    </div>
                    <div class="col-sm-6 v-center multiusuarios-img ">
                        <img class="img-responsive" src="https://static.contapp.com.co/contapp-web/team.png" alt="sistemas pos multiusuario y multitienda"/>
                    </div>
                </section>
            </div>
            <section id="planes" class="content content-boxed overflow-hidden">
                <div class="row">
                    <div class="col-sm-12 padding-30 v-center">
                        <h2 class="h1 font-s36 text-center text-white">Planes Super flexibles.</h2>
                        <h3 class="text-center text-white-op push">Escoge el plan que más se adapte a tu objetivo.</h3>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-danger text-center" style="padding: 20px">
                            <div class="h4 push-15">
                                información importante
                            </div>
                            <div>
                                Los planes Empresarial, Franquicias y Cadenas en la modalidad de pago anual tienen gratis
                            </div>
                        </div>
                        <div class="flex  " style="align-items: center; justify-content: center; padding: 20px">
                            <span class="form-check-label h3 " >Mensual</span>

                            <div style="margin-left: 2rem; margin-right: 2rem">
                                <input value="1" name="anually" onclick="cambiarPeriodo()" type="checkbox" class="theme-checkbox">
                            </div>
                            <span class="form-check-label h3" >Anual</span>

                        </div>

                    </div>
                    <div class="col-sm-4 col-lg-4" id="mensual">
                        <a class="block block-link-hover2 text-center" href="#">
                            <div class="block-header">
                                <h3 class="block-title">Emprendedor</h3>
                            </div>
                            <div class="block-content block-content-full bg-warning">
                                <div class="h1 font-w700 text-white  monthly ">$<span id="monto_mensual">49.000</span>
                                </div>
                                <div class="h1 font-w700 text-white yearly hide">$<span id="monto_mensual">490.000</span>
                                </div>
                                <div class="h4 font-w300 text-white-op">Por mes</div>
                                <div class="h4 font-w300 text-white-op">Ahorra <b>$98.000</b> anual</div>
                            </div>
                            <div class="block-content">
                                <table class="table table-borderless table-condensed">
                                    <tbody>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> 1000 Ventas por mes</td>
                                    </tr>
                                  
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> 500 Productos</td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> 2 Usuarios</td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> 1 Tienda</td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> Facturación electrónica (firma digital $200.000 anual)</td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong>Precio por factura desde $30</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Soporte</strong> por email</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block-content block-content-mini block-content-full bg-gray-lighter">
                    <span class="btn btn-warning pagar" id="mensual"
                          onclick="suscribirme('emprendedor')">Suscribirme</span>
                                <span id="valor_mensual" class="hidden"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <a class="block block-link-hover2 text-center" href="#">
                            <div class="block-header">
                                <h3 class="block-title">Empresarial</h3>
                            </div>
                            <div class="block-content block-content-full bg-primary ribbon ribbon-bookmark ribbon-danger">
                                <div class="h1 font-w700  monthly">$<span id="monto_trimestral">99.000</span></div>
                                <div class="h1 font-w700 text-white  yearly hide">$<span id="monto_mensual">990.000</span>
                                </div>
                                <div class="h4 font-w300 text-white-op">Por mes</div>
                                <div class="h4 font-w300 text-white-op">Ahorra <b>$198.000</b> anual</div>
                            </div>
                            <div class="block-content">
                                <table class="table table-borderless table-condensed">
                                    <tbody>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> Ventas Ilimitadas</td>
                                    </tr>
                                   
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> Productos Ilimitados</td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> 5 Usuarios</td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong>2 Tiendas</td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> Facturación electrónica (firma digital incluido en la anualidad</td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong>Precio por factura desde $20</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Soporte</strong> por email y Teléfono</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block-content block-content-mini block-content-full bg-gray-lighter">
                    <span class="btn btn-primary pagar" id="trimestral"
                          onclick="suscribirme('empresarial')">Suscribirme</span>
                                <span id="valor_trimestral" class="hidden"></span>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                        <a class="block block-link-hover2 text-center" href="#">
                            <div class="block-header">
                                <h3 class="block-title">Franquicias y Cadenas</h3>
                            </div>
                            <div class="block-content block-content-full bg-success ribbon ribbon-bookmark ribbon-danger">
                                <div class="h1 font-w700 text-white monthly">$<span id="monto_anual">149.000</span></div>
                                <div class="h1 font-w700 text-white  yearly hide">$<span id="monto_mensual">1.490.000</span>
                                </div>
                                <div class="h4 font-w300 text-white-op">Por mes</div>
                                <div class="h4 font-w300 text-white-op">Ahorra <b>$298.000</b> anual</div>
                            </div>
                            <div class="block-content ">

                                <table class="table table-borderless table-condensed">
                                    <tbody>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> Ventas Ilimitadas</td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> Productos Ilimitados</td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> Usuarios Ilimitados</td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> 3 Tiendas / tienda adicional 50.000</td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong> Facturación electrónica (firma digital incluido en la anualidad</td>
                                    </tr>
                                    <tr>
                                        <td><strong><i class="fa fa-check"></i></strong>Precio por factura desde $10</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Soporte prioritario</strong> por email y Teléfono</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="block-content block-content-mini block-content-full bg-gray-lighter">
                    <span class="btn btn-success pagar" id="anual"
                          onclick="suscribirme('franquicias')">Suscribirme</span>
                                <span id="valor_anual" class="hidden"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <div class="content-boxed">
            <section class="contactenos">
                <div class="col-sm-6 padding-30">
                    <div class="row push">
                        <div class="col-sm-4 text-center">
                            <img class="" width="88" height="100"
                                 src="https://static.contapp.com.co/contapp-web/correo.png" alt="software
                            administrativo"/></div>
                        <div class="col-sm-8 text-center">
                            <p
                                    class="h3 font-w600 push-15-t">¿Tienes dudas?</p>
                            <p
                                    class="font-s16 font-w500">ventas@contapp.com.co</p>
                        </div>
                    </div>
                    <div class="row push">
                        <div class="col-sm-4 text-center">
                            <img class="" width="88" height="100"
                                 src="https://static.contapp.com.co/contapp-web/telefono.png" alt="software administrativo"/>
                        </div>
                        <div class="col-sm-8 text-center">
                            <p class="h3 font-w600 push-15-t">¿Telefonos?</p>
                            <p class="font-s16 font-w500">314-553-5632</p>
                        </div>
                    </div>
                    <div class="row push">
                        <div class="col-sm-4 text-center">
                            <img class="" width="88" height="100"
                                 src="https://static.contapp.com.co/contapp-web/lugar.png" alt="software administrativo"/>
                        </div>
                        <div class="col-sm-8 text-center">
                            <p class="h3 font-w600">¿Quieres visitarnos?</p>
                            <p class="font-s16 font-w500">Edf. ParqueSoft Calle 23 # 14-15 // Tercer Piso Armenia,
                                Quindío</p>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 padding-30">
                    <img class="img-responsive" height="173" width="281" src="{{url('assets/img/mapa.png')}}" alt="sistema pos colombia"/>
                </div>
            </section>
        </div>
    </main>
@stop
