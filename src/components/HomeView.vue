<template>
    <main>
        <!-- Features Section -->
        <div class="bg-radial from-blue-600 to-blue-800">
            <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="max-w-4xl mx-auto text-center space-y-12">
                    <h2 class="text-4xl md:text-5xl font-bold text-white leading-tight">
                        Sistema POS Online Multiplataforma con Facturación Electrónica Ilimitada en Colombia
                    </h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center space-y-4">
                            <img src="https://static.contapp.com.co/contapp-web/benefit-time.svg"
                                alt="Sistema POS en la nube con facturación electrónica automatizada" class="mx-auto" />
                            <p class="text-white text-lg">
                                Optimiza tu tiempo con <strong>facturación electrónica automatizada</strong>. Gestiona
                                tu empresa en tiempo real desde cualquier lugar con nuestro sistema POS multiusuario en
                                la nube.
                            </p>
                        </div>
                        <div class="text-center space-y-4">
                            <img src="https://static.contapp.com.co/contapp-web/benefit-cost.svg"
                                alt="Software punto de venta con control de inventarios integrado" class="mx-auto" />
                            <p class="text-white text-lg">
                                Maximiza tu rentabilidad con nuestro <strong>control de inventario en tiempo
                                    real</strong>.
                                Sistema completo de gestión de caja, control de gastos y reportes financieros sin costos
                                adicionales.
                            </p>
                        </div>
                        <div class="text-center space-y-4">
                            <img src="https://static.contapp.com.co/contapp-web/benefit-happiness.svg"
                                alt="POS electrónico multiusuario para gestión empresarial" class="mx-auto" />
                            <p class="text-white text-lg">
                                Impulsa el crecimiento de tu negocio con nuestro <strong>sistema POS integral</strong>.
                                Aumenta tus ventas y eficiencia operativa con herramientas de gestión empresarial
                                completas.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- POS Features Section -->
        <div id="caracteristicas" class="bg-gray-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <section class="py-16 flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2 relative">
                        <div class="aspect-[3/2] relative">
                            <video class="w-full h-full object-cover rounded-lg" autoplay loop muted>
                                <source src="https://static.contapp.com.co/contapp-web/ventas.mp4" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                    <div class="md:w-1/2 space-y-6">
                        <h2 class="text-4xl font-bold text-white text-center md:text-left">
                            Sistema POS Multiusuario con Facturación Electrónica Ilimitada
                        </h2>
                        <p class="text-white/80 text-lg">
                            Revoluciona la atención al cliente con nuestro <strong>POS móvil</strong>. Realiza ventas,
                            consultas y facturación electrónica desde cualquier dispositivo, brindando una experiencia
                            de compra más personalizada y eficiente.
                        </p>
                        <p class="text-white/80 text-lg">
                            <strong>Contapp</strong> integra <em>control de inventario en tiempo real</em>, <em>gestión
                                de caja eficiente</em>, y <em>reportes financieros detallados</em>. Una solución
                            completa accesible desde PC, tablet o celular para la gestión integral de tu negocio.
                        </p>
                        <div class="text-center ">
                            <button
                                class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg transition duration-300">
                                Descubre Nuestro Sistema POS Integral
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Features Tabs Section -->
        <div class="bg-linear-to-r from-blue-600 to-blue-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="max-w-4xl mx-auto">
                    <div
                        class="flex flex-wrap justify-center gap-4 mb-12 border border-gray-200 rounded-lg bg-white/5 backdrop-blur-sm p-1">
                        <button v-for="tab in tabs" :key="tab.id" @click="activeTab = tab.id" :class="['flex-1 py-6 px-4 rounded-md transition-all duration-300',
                            activeTab === tab.id ? 'bg-white text-blue-700' : 'text-white hover:bg-white/10']">
                            <i :class="['fa fa-2x mb-2', tab.icon]"></i>
                            <span class="block">{{ tab.name }}</span>
                        </button>
                    </div>

                    <div class="mt-8">
                        <div v-show="activeTab === 'vender'" class="grid md:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="text-4xl font-bold text-white">El sistema POS listo para vender</h3>
                                <p class="text-white text-lg">
                                    Crea y agrega productos o servicios rapidamente, cambia sus cantidades o
                                    precios en cualquier momento y listo, imprime o envia la factura por correo
                                    electrónico. ahorra dinero en papel y ayudas al medio ambiente.
                                </p>
                            </div>
                            <img src="https://static.contapp.com.co/contapp-web/ventas.webp"
                                alt="sistema punto de venta" class="w-full -mb-25" />
                        </div>

                        <div v-show="activeTab === 'gestionar'" class="grid md:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="text-4xl font-bold text-white">Todo un CRM en tu mano</h3>
                                <p class="text-white text-lg">
                                    Maneja todos tus contactos, clientes y proveedores, recuerdale a tus clientes cuando
                                    deben pagar,
                                    maneja tus cuentas por cobrar con tus proveedores, y recibe notificaciones de cuando
                                    pagarlas,
                                    todo en un solo Sistema POS y Administrativo.
                                </p>
                            </div>
                            <img src="https://static.contapp.com.co/contapp-web/Clientes.webp"
                                alt="sistema administrativo" class="w-full -mb-32" />
                        </div>

                        <div v-show="activeTab === 'informes'" class="grid md:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="text-4xl font-bold text-white">Informes y Reportes en tiempo real</h3>
                                <p class="text-white text-lg">
                                    Toma decisiones basadas en datos reales, analiza tus ventas, productos más vendidos,
                                    mejores clientes, estado de caja, cuentas por cobrar y pagar, todo en tiempo real y
                                    desde
                                    cualquier lugar.
                                </p>
                            </div>
                            <img src="https://static.contapp.com.co/contapp-web/graficas.webp" alt="informes y reportes"
                                class="w-full -mb-25" />
                        </div>

                        <div v-show="activeTab === 'crecer'" class="grid md:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6 cols-auto">
                                <h3 class="text-4xl font-bold text-white">Haz crecer tu negocio</h3>
                                <p class="text-white text-lg">
                                    Con nuestro sistema POS y administrativo, podrás tomar mejores decisiones, optimizar
                                    tus
                                    recursos, aumentar tus ventas y hacer crecer tu negocio de manera sostenible.
                                </p>
                            </div>
                            <img src="https://static.contapp.com.co/contapp-web/crecer.webp"
                                alt="hacer crecer tu negocio" class="w-full -mb-16" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Multiusuario Section -->
        <div class="bg-gray-900 py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <h2 class="text-4xl font-bold text-white text-center md:text-left">Multiusuario y Multitienda
                        </h2>
                        <h3 class="text-xl text-white opacity-90 text-center md:text-left">Trabaja con tu equipo</h3>
                        <p class="text-white opacity-80 text-lg">
                            Gestiona todo tu equipo de trabajo, vendedores, auxiliar de bodega, puedes dar acceso a tu
                            contador, siempre verás lo que hacen.
                        </p>
                        <p class="text-white opacity-80 text-lg">
                            ¿Preparado para crecer? <b>Con el sistemas POS Contapp</b> podrás gestionar todas tus
                            tiendas a la perfección, saber que sucede en cada tienda por separado y saber cual es la más
                            rentable. Todos tus datos están centralizados, precios, productos, niveles de Stock, sin
                            dolores de cabeza.
                        </p>
                        <div class="text-center">
                            <button
                                class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                                Ver más características
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <img class="w-full max-w-lg" src="https://static.contapp.com.co/contapp-web/team.png"
                            alt="sistemas pos multiusuario y multitienda" />
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Section -->
        <div id="planes" class="bg-gray-900">
            <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-extrabold text-white sm:text-5xl">Planes Super flexibles</h2>
                    <p class="mt-4 text-xl text-gray-400">Escoge el plan que más se adapte a tu objetivo.</p>
                </div>

                <div class="flex items-center justify-center gap-4 mb-8">
                    <span class="text-lg text-gray-400">Mensual</span>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" v-model="isAnnual" class="sr-only peer">
                        <div
                            class="w-14 h-7 bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-6 after:w-6 after:transition-all">
                        </div>
                    </label>
                    <span class="text-lg text-gray-400">Anual</span>
                </div>

                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Plan Emprendedor -->
                    <div class="bg-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300">
                        <div class="mb-8">
                            <h3 class="text-2xl font-semibold text-white">Emprendedor</h3>
                            <p class="mt-4 text-gray-400">Ideal para comenzar tu negocio</p>
                        </div>
                        <div class="mb-8">
                            <span class="text-5xl font-extrabold text-white">${{ isAnnual ? '490.000' : '49.000'
                                }}</span>
                            <span class="text-xl font-medium text-gray-400">/mes</span>
                            <p class="text-sm text-gray-400 mt-2">Ahorra <b>$98.000</b> anual</p>
                        </div>
                        <ul class="mb-8 space-y-4 text-gray-400">
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>1000 Ventas por mes</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>500 Productos</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>2 Usuarios</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>1 Tienda</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Facturación electrónica <br><small>(firma digital $200.000 anual)</small></span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Precio por factura desde $30</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-gray-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                                <span>Soporte por email</span>
                            </li>
                        </ul>
                        <button @click="suscribirse('emprendedor')"
                            class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-600 hover:to-yellow-700 transition-colors">
                            Suscribirme
                        </button>
                    </div>

                    <!-- Plan Empresarial -->
                    <div
                        class="bg-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300 relative">
                        <div class="mb-8">
                            <h3 class="text-2xl font-semibold text-white">Empresarial</h3>
                            <p class="mt-4 text-gray-400">Perfecto para negocios en crecimiento</p>
                        </div>
                        <div class="mb-8">
                            <span class="text-5xl font-extrabold text-white">${{ isAnnual ? '990.000' : '99.000'
                                }}</span>
                            <span class="text-xl font-medium text-gray-400">/mes</span>
                            <p class="text-sm text-gray-400 mt-2">Ahorra <b>$198.000</b> anual</p>
                        </div>
                        <ul class="mb-8 space-y-4 text-gray-400">
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Ventas Ilimitadas</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Productos Ilimitados</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>5 Usuarios</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>2 Tiendas</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Facturación electrónica <br><small>(firma digital incluido en la
                                        anualidad)</small></span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Precio por factura desde $20</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-gray-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span>Soporte por email y Teléfono</span>
                            </li>
                        </ul>
                        <button @click="suscribirse('empresarial')"
                            class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 transition-colors">
                            Suscribirme
                        </button>
                    </div>

                    <!-- Plan Franquicias -->
                    <div class="bg-gray-800 rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-300">
                        <div class="mb-8">
                            <h3 class="text-2xl font-semibold text-white">Franquicias y Cadenas</h3>
                            <p class="mt-4 text-gray-400">Para negocios de gran escala</p>
                        </div>
                        <div class="mb-8">
                            <span class="text-5xl font-extrabold text-white">${{ isAnnual ? '1.490.000' : '149.000'
                                }}</span>
                            <span class="text-xl font-medium text-gray-400">/mes</span>
                            <p class="text-sm text-gray-400 mt-2">Ahorra <b>$298.000</b> anual</p>
                        </div>
                        <ul class="mb-8 space-y-4 text-gray-400">
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Ventas Ilimitadas</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Productos Ilimitados</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Usuarios Ilimitados</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>3 Tiendas / tienda adicional 50.000</span>
                            </li>
                            <li class="flex items-center text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Facturación electrónica <br><small>(firma digital incluido en la
                                        anualidad)</small></span>
                            </li>
                            <li class="flex items-center text-left text-left">
                                <svg class="h-6 w-6 text-green-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span>Precio por factura desde $10</span>
                            </li>
                            <li class="flex items-center text-left text-left text-left">
                                <svg class="h-6 w-6 text-gray-500 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span>Soporte prioritario por email y Teléfono</span>
                            </li>
                        </ul>
                        <button @click="suscribirse('franquicias')"
                            class="block w-full py-3 px-6 text-center rounded-md text-white font-medium bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 transition-colors">
                            Suscribirme
                        </button>
                    </div>
                </div>
            </section>
        </div>



        <!-- Contact Section -->
        <div class="bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="grid md:grid-cols-2 gap-12">
                    <div class="">
                        <div class="flex items-center gap-8">
                            <img src="https://static.contapp.com.co/contapp-web/correo.png" alt="correo" class="w-24" />
                            <div class="text-center w-full">
                                <h3 class="text-2xl font-semibold text-gray-800">¿Tienes dudas?</h3>
                                <p class="text-lg font-medium text-gray-600">ventas@contapp.com.co</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-8">
                            <img src="https://static.contapp.com.co/contapp-web/telefono.png" alt="telefono"
                                class="w-24" />
                            <div class="text-center w-full">
                                <h3 class="text-2xl font-semibold text-gray-800">¿Telefonos?</h3>
                                <p class="text-lg font-medium text-gray-600">314-553-5632</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-8">
                            <img src="https://static.contapp.com.co/contapp-web/lugar.png" alt="ubicacion"
                                class="w-24" />
                            <div class="text-center w-full">
                                <h3 class="text-2xl font-semibold text-gray-800">¿Quieres visitarnos?</h3>
                                <p class="text-lg font-medium text-gray-600">
                                    Edf. ParqueSoft Calle 23 # 14-15 // Tercer Piso Armenia, Quindío
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="https://static.contapp.com.co/contapp-web/mapa.webp" alt="sistema pos colombia"
                            class="w-full rounded-lg" />
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script setup>
import { ref } from 'vue'

const activeTab = ref('vender')
const isAnnual = ref(false)

const tabs = [
    { id: 'vender', name: 'Vender', icon: 'fa-tags' },
    { id: 'gestionar', name: 'Gestionar', icon: 'fa-pencil' },
    { id: 'informes', name: 'Informes', icon: 'fa-bar-chart' },
    { id: 'crecer', name: 'Crecer', icon: 'fa-rocket' }
]

const suscribirse = (plan) => {
    window.location.href = `https://app.contapp.com.co/register?plan=${plan}&period=${isAnnual.value ? 'annual' : 'monthly'}`
}
</script>

<style>
.animate-fade-up {
    animation: fadeUp 1s ease-out;
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-bounce {
    animation: bounce 1s infinite;
}

@keyframes bounce {

    0%,
    100% {
        transform: translateY(-5%);
        animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
    }

    50% {
        transform: translateY(0);
        animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
    }
}
</style>