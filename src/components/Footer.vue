<template>
    <footer class="w-full bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <a href="/" class="flex justify-center py-8">
                    <img class="w-[156px] h-[57px]" alt="Contapp - Sistema POS y Facturación Electrónica"
                        src="https://static.contapp.com.co/contapp-web/logo.webp" width="156" height="57" loading="lazy"
                        decoding="async" fetchpriority="low">
                </a>
                <div class="mt-6 text-sm text-gray-300 text-center px-4 mb-10">
                    <p>Somos una solución integral de gestión empresarial en la nube que revoluciona la forma de
                        administrar tu negocio. Nuestro sistema POS multiusuario con facturación electrónica ilimitada
                        te permite controlar inventarios, gestionar múltiples sucursales, y optimizar tus operaciones
                        diarias desde cualquier dispositivo.</p>
                </div>
                <ul
                    class="text-lg flex items-center justify-center flex-col gap-7 md:flex-row md:gap-12 transition-all duration-500 py-10 mb-10 border-b border-gray-700">
                    <li>
                        <a href="#inicio" class="text-gray-300 hover:text-white font-semibold">Inicio</a>
                    </li>
                    <li>
                        <a href="#caracteristicas"
                            class="text-gray-300 hover:text-white font-semibold">Características</a>
                    </li>
                    <li>
                        <a href="#planes" class="text-gray-300 hover:text-white font-semibold">Planes</a>
                    </li>
                    <li>
                        <a href="https://app.contapp.com.co/demo"
                            class="text-gray-300 hover:text-white font-semibold">Demo</a>
                    </li>
                    <li>
                        <a href="https://app.contapp.com.co/auth/login"
                            class="text-gray-300 hover:text-white font-semibold">Ingreso</a>
                    </li>
                </ul>
                <div class="flex space-x-10 justify-center items-center mb-10">
                    <a href="#" class="block transition-all duration-500 hover:-translate-y-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 93 92" fill="none">
                            <rect x="1.13867" width="91.5618" height="91.5618" rx="15" fill="#337FFF" />
                            <path
                                d="M57.4233 48.6403L58.7279 40.3588H50.6917V34.9759C50.6917 32.7114 51.8137 30.4987 55.4013 30.4987H59.1063V23.4465C56.9486 23.1028 54.7685 22.9168 52.5834 22.8901C45.9692 22.8901 41.651 26.8626 41.651 34.0442V40.3588H34.3193V48.6403H41.651V68.671H50.6917V48.6403H57.4233Z"
                                fill="white" />
                        </svg>
                    </a>
                    <a href="#" class="block transition-all duration-500 hover:-translate-y-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 93 92" fill="none">
                            <rect x="0.138672" width="91.5618" height="91.5618" rx="15" fill="black" />
                            <path
                                d="M50.7568 42.1716L69.3704 21H64.9596L48.7974 39.383L35.8887 21H21L40.5205 48.7983L21 71H25.4111L42.4788 51.5869L56.1113 71H71L50.7557 42.1716H50.7568ZM44.7152 49.0433L42.7374 46.2752L27.0005 24.2492H33.7756L46.4755 42.0249L48.4533 44.7929L64.9617 67.8986H58.1865L44.7152 49.0443V49.0433Z"
                                fill="white" />
                        </svg>
                    </a>
                    <a href="#" class="block transition-all duration-500 hover:-translate-y-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 93 93" fill="none">
                            <rect x="1.13867" y="1" width="91.5618" height="91.5618" rx="15" fill="#FF0000" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M67.5615 29.2428C69.8115 29.8504 71.58 31.6234 72.1778 33.8708C73.2654 37.9495 73.2654 46.4647 73.2654 46.4647C73.2654 46.4647 73.2654 54.98 72.1778 59.0586C71.5717 61.3144 69.8032 63.0873 67.5615 63.6866C63.4932 64.7771 47.1703 64.7771 47.1703 64.7771C47.1703 64.7771 30.8557 64.7771 26.7791 63.6866C24.5291 63.079 22.7606 61.306 22.1628 59.0586C21.0752 54.98 21.0752 46.4647 21.0752 46.4647C21.0752 46.4647 21.0752 37.9495 22.1628 33.8708C22.7689 31.615 24.5374 29.8421 26.7791 29.2428C30.8557 28.1523 47.1703 28.1523 47.1703 28.1523C47.1703 28.1523 63.4932 28.1523 67.5615 29.2428ZM55.5142 46.4647L41.9561 54.314V38.6154L55.5142 46.4647Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
                <div class="text-center mb-10">
                    <h3 class="text-lg font-semibold text-gray-300 uppercase mb-4">Quienes nos apoyan</h3>
                    <img class="mx-auto mb-10" alt="socios contapp"
                        src="https://static.contapp.com.co/contapp-web/Apoyo.webp">
                    <img class="mx-auto" alt="socios contapp" src="https://static.contapp.com.co/contapp-web/Mapa.webp">

                </div>
                <div class="text-lg text-gray-300 text-center pb-8">
                    <div class="flex justify-center gap-2 mb-2">Creado con
                        <i class="text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6 fill-current">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                            </svg>
                        </i> en Colombia
                    </div>
                    <p class="mb-2">Contapp Nit:1001283353-3</p>
                    <a class="text-gray-300 hover:text-white no-underline" href="mailto:ventas@contapp.com.co"
                        target="_blank">ventas@contapp.com.co</a>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'Footer'
}
</script>