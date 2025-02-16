<script setup>
import TypedText from './TypedText.vue';
</script>

<template>
    <div class="bg-radial from-blue-500 to-blue-800">
        <header class="py-8 min-h-[90px]" role="banner">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center justify-between" role="navigation" aria-label="Main navigation">
                    <!-- Logo Section -->
                    <div class="w-full md:w-1/3 text-center ">
                        <a href="/" class="inline-block">
                            <img class="w-[156px] h-[57px]" src="https://static.contapp.com.co/contapp-web/logo.webp"
                                alt="Contapp - Sistema POS y Facturación Electrónica" loading="eager" width="156"
                                height="57" decoding="async" fetchpriority="high" />
                        </a>
                    </div>

                    <!-- Navigation Section -->
                    <nav class="w-full md:w-2/3 text-center">
                        <ul class="flex flex-wrap justify-center items-center space-x-6">
                            <li>
                                <a href="#caracteristicas"
                                    class="text-white font-normal hover:text-gray-200 cursor-pointer">
                                    Características
                                </a>
                            </li>
                            <li>
                                <a href="#planes" class="text-white font-normal hover:text-gray-200 cursor-pointer">
                                    Planes
                                </a>
                            </li>
                            <li>
                                <a href="https://app.contapp.com.co/demo"
                                    class="text-white  font-normal hover:text-gray-200">
                                    Demo
                                </a>
                            </li>
                            <li>
                                <a href="https://app.contapp.com.co/auth/login"
                                    class="text-white  font-normal hover:text-gray-200">
                                    Login
                                </a>
                            </li>
                            <li class="hidden sm:block">
                                <a href="https://app.contapp.com.co" target="_blank" class="inline-block">
                                    <button
                                        class="bg-gray-800 hover:bg-gray-900 text-white  font-normal py-2 px-4 rounded transition duration-300">
                                        Empieza Gratis
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="" id="inicio">
            <section class="mx-auto px-4 sm:px-6 lg:px-8 py-12 overflow-hidden">
                <!-- Hero Section -->
                <div class="text-center space-y-6 py-12">
                    <h1 class="text-5xl md:text-6xl font-bold text-white leading-tight">
                        Software POS Multiusuario y Facturación Electrónica en Colombia<br />para
                        <TypedText></TypedText>
                        <span class="element"></span>
                    </h1>
                    <h2 class="text-xl md:text-2xl text-white/80 max-w-4xl mx-auto">
                        Contapp es un sistema POS en la nube con facturación electrónica ilimitada. Gestiona
                        inventarios, compras, ventas, gastos y reportes desde cualquier dispositivo. La solución
                        multiplataforma ideal para hacer crecer tu negocio.
                    </h2>
                    <h3 class="text-xl md:text-2xl text-white/80 max-w-4xl mx-auto">
                        Optimiza tu negocio con nuestro POS electrónico multiusuario. Facturación electrónica GRATIS
                        ilimitada, control de inventario en tiempo real y gestión financiera completa.
                    </h3>
                    <a href="https://app.contapp.com.co" target="_blank" class="inline-block">
                        <button
                            class="bg-blue-800 hover:bg-blue-900 text-white text-2xl font-semibold px-8 py-4 rounded-lg transition duration-300 transform hover:scale-105 animate-bounce">
                            Pruébalo ahora Gratis
                        </button>
                    </a>
                </div>
                <div class="mt-12 -mx-8 -mb-12 animate-fade-up">
                    <img src="https://static.contapp.com.co/contapp-web/Portada.webp"
                        alt="Interfaz del Software POS Contapp - Sistema de Facturación Electrónica" class="w-full"
                        loading="lazy" decoding="async" fetchpriority="low" />
                </div>
            </section>
        </div>
    </div>
</template>
