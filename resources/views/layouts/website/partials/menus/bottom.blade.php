<nav class="flex justify-between max-w-5xl pt-10 pb-3 mx-auto font-bold text-gray-600 whitespace-no-wrap">
    <a href="/" class="hover:text-gray-900">Inicio</a>

    <div class="group">
        <div class="flex pb-2 cursor-pointer hover:text-gray-900">
            <a href="/nosotros">Nosotros</a>
            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
        </div>

        <div class="absolute invisible py-4 bg-white rounded-lg shadow-lg group-hover:visible">
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Naturelek
                contigo</a>
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Trabaja
                con nosotros</a>
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Casos
                de éxito</a>
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">RSC</a>
        </div>
    </div>

    <div class="group">
        <div class="flex pb-2 cursor-pointer hover:text-gray-900">
            <a href="#">Sectores</a>
            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
        </div>

        <div class="absolute invisible py-4 bg-white rounded-lg shadow-lg group-hover:visible">
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Público</a>
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Inmobiliario
                (comunidad de propietarios)</a>
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Hostelería</a>
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Industria</a>
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Agrario</a>
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Transporte</a>
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Asociaciones</a>
        </div>
    </div>

    <div class="group">
        <div class="flex pb-2 cursor-pointer hover:text-gray-900">
            <a href="/servicios">Servicios</a>
            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
        </div>

        <div class="absolute invisible py-4 bg-white rounded-lg shadow-lg group-hover:visible">
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Gestión
                energética</a>
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Autoconsumo</a>
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Iluminación
                LED</a>
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Monitorización</a>

            <div x-data="{ open: false }" @mouseover="open = true" @mouseout="open = false">
                <div
                    class="px-8 py-4 border-l-4 border-transparent cursor-pointer hover:text-gray-900 hover:border-green-500">
                    <div class="flex justify-between">
                        <a href="#">Tecnología</a>
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                        </svg>
                    </div>

                </div>

                <div class="absolute py-4 bg-white border-l-2 rounded-lg shadow-lg" style="left: 100%; bottom: 0"
                    x-show="open">
                    <a href="#"
                        class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Naturbox</a>
                    <a href="#"
                        class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Domótica</a>
                    <a href="#"
                        class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Electrolineras</a>
                </div>
            </div>

            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Financiación
                e inversión</a>
        </div>
    </div>

    <div class="group">
        <div class="flex pb-2 cursor-pointer hover:text-gray-900">
            <a href="#">Consultoría energética</a>
            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
            </svg>
        </div>

        <div class="absolute invisible py-4 bg-white rounded-lg shadow-lg group-hover:visible">
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Auditorías</a>
            <a href="#"
                class="block px-8 py-4 border-l-4 border-transparent hover:text-gray-900 hover:border-green-500">Eficiencia
                energética</a>
        </div>
    </div>

    <a href="#" class="pb-2 hover:text-gray-900">Noticias</a>

    <a href="#" class="pb-2 hover:text-gray-900">Contacto</a>
</nav>