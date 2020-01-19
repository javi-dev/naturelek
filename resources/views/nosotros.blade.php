<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nosotros - Naturelek</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-500">
    <nav>
    </nav>
    <div class="flex justify-end">
        <div class="w-full p-4 lg:hidden">
            <div class="relative" x-data="{ open: false }">
                <svg class="absolute right-0 w-6 h-6 m-2" @click="open = true" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
                <div class="absolute right-0 w-full max-w-sm px-8 bg-white rounded-lg shadow-lg" x-show="open"
                    @click.away="open = false">
                    <svg class="absolute right-0 w-6 h-6 m-2 text-gray-700 fill-current" @click="open = false"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 8.586L2.929 1.515 1.515 2.929 8.585 10l-7.07 7.071 1.414 1.414L10 11.415l7.071 7.07 1.414-1.414L11.415 10l7.07-7.071-1.414-1.414L10 8.585z" />
                    </svg>
                    <div class="mt-12" x-data="{ open: false }">
                        <div class="flex justify-between font-bold tracking-wide text-gray-700">
                            <span class="uppercase">Acceso</span>

                            <svg x-show="open === false" @click="open = true" class="flex-shrink-0 w-6 h-6 fill-current"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                            </svg>
                            <svg x-show="open" @click="open = false" class="flex-shrink-0 w-6 h-6 fill-current"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                        <div x-show="open" class="px-4">
                            <a href="http://naturelek.wolfcrm.es/index.php" class="block py-2">CRM</a>
                            <a href="#" class="block py-2">Usuarios</a>
                            <a href="http://medidas.naturelek.com/" class="block py-2">Telemedidas</a>
                        </div>
                    </div>

                    <div x-data="{ open: false }">
                        <div class="flex justify-between pt-4 font-bold tracking-wide text-gray-700">
                            <a href="#" class="uppercase">Trabaja
                                con
                                nosotros</a>

                            <svg x-show="open === false" @click="open = true" class="flex-shrink-0 w-6 h-6 fill-current"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                            </svg>
                            <svg x-show="open" @click="open = false" class="flex-shrink-0 w-6 h-6 fill-current"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>

                        <div x-show="open" class="px-4">
                            <a href="#" class="block py-2">Colaborador</a>
                            <a href="#" class="block py-2">Comercial</a>
                            <a href="#" class="block py-2">Naturelek Contigo</a>
                        </div>
                    </div>

                    <div x-data="{ open: false }">
                        <div class="flex justify-between py-4 font-bold tracking-wide text-gray-700">
                            <span class="uppercase">Idiomas</span>

                            <svg x-show="open === false" @click="open = true" class="flex-shrink-0 w-6 h-6 fill-current"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                            </svg>
                            <svg x-show="open" @click="open = false" class="flex-shrink-0 w-6 h-6 fill-current"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                        <div x-show="open" class="px-4">
                            <a href="#" class="block pb-2">Inglés</a>
                            <a href="#" class="block py-2">Euskera</a>
                        </div>
                    </div>

                    <div class="border-t border-gray-500">
                        <a href="#" class="block pt-4 font-bold tracking-wide text-gray-700 uppercase">Inicio</a>

                        <div x-data="{ open: false }">
                            <div class="flex justify-between pt-4 font-bold tracking-wide text-gray-700">
                                <a href="/nosotros" class="uppercase">Nosotros</a>

                                <svg x-show="open === false" @click="open = true"
                                    class="flex-shrink-0 w-6 h-6 fill-current" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                                </svg>
                                <svg x-show="open" @click="open = false" class="flex-shrink-0 w-6 h-6 fill-current"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>


                            <div x-show="open" class="px-4">
                                <a href="#" class="block py-2">Naturelek contigo</a>
                                <a href="#" class="block py-2">Trabaja con nosotros</a>
                                <a href="#" class="block py-2">Casos de éxito</a>
                                <a href="#" class="block py-2">RSC</a>
                            </div>
                        </div>

                        <div x-data="{ open: false }">
                            <div class="flex justify-between pt-4 font-bold tracking-wide text-gray-700">
                                <a href="#" class="uppercase">Sectores</a>
                                <svg x-show="open === false" @click="open = true"
                                    class="flex-shrink-0 w-6 h-6 fill-current" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                                </svg>
                                <svg x-show="open" @click="open = false" class="flex-shrink-0 w-6 h-6 fill-current"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                            <div x-show="open" class="px-4">
                                <a href="#" class="block py-2">Público</a>
                                <a href="#" class="block py-2">Inmobiliario (comunidad de propietarios)</a>
                                <a href="#" class="block py-2">Hostelería</a>
                                <a href="#" class="block py-2">Industria</a>
                                <a href="#" class="block py-2">Agrario</a>
                                <a href="#" class="block py-2">Transporte</a>
                                <a href="#" class="block py-2">Asociaciones</a>
                            </div>
                        </div>

                        <div x-data="{ open: false }">
                            <div class="flex justify-between pt-4 font-bold tracking-wide text-gray-700">
                                <a href="#" class="uppercase">Servicios</a>
                                <svg x-show="open === false" @click="open = true"
                                    class="flex-shrink-0 w-6 h-6 fill-current" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                                </svg>
                                <svg x-show="open" @click="open = false" class="flex-shrink-0 w-6 h-6 fill-current"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>

                            <div x-show="open" class="px-4">
                                <a href="#" class="block py-2">Gestión energética</a>
                                <a href="#" class="block py-2">Autoconsumo</a>
                                <a href="#" class="block py-2">Iluminación LED</a>
                                <a href="#" class="block py-2">Monitorización</a>

                                <div x-data="{ open: false }">
                                    <div class="flex justify-between pt-2">
                                        <a href="#" class="">Tecnología</a>
                                        <svg x-show="open === false" @click="open = true"
                                            class="flex-shrink-0 w-6 h-6 text-gray-700 fill-current" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                                        </svg>
                                        <svg x-show="open" @click="open = false"
                                            class="flex-shrink-0 w-6 h-6 fill-current" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>

                                    <div x-show="open" class="px-4">
                                        <a href="#" class="block py-2">Naturbox</a>
                                        <a href="#" class="block py-2">Domótica</a>
                                        <a href="#" class="block py-2">Electrolineras</a>
                                    </div>
                                </div>
                            </div>


                            <div x-data="{ open: false }">
                                <div class="flex justify-between pt-4 font-bold tracking-wide text-gray-700">
                                    <a href="#" class="uppercase">Consultoría
                                        energética</a>
                                    <svg x-show="open === false" @click="open = true"
                                        class="flex-shrink-0 w-6 h-6 fill-current" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                                    </svg>
                                    <svg x-show="open" @click="open = false" class="flex-shrink-0 w-6 h-6 fill-current"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg>

                                </div>

                                <div x-show="open" class="px-4">
                                    <a href="#" class="block py-2">Auditorías</a>
                                    <a href="#" class="block py-2">Eficiencia energética</a>
                                </div>
                                <a href="#" class="block pt-4 font-bold tracking-wide text-gray-700 uppercase">FFQQ
                                    Naturelek
                                    contigo</a>

                                <a href="#"
                                    class="block pt-4 font-bold tracking-wide text-gray-700 uppercase">Financiación
                                    e
                                    inversión</a>

                                <a href="#"
                                    class="block pt-4 font-bold tracking-wide text-gray-700 uppercase">Noticias</a>

                                <a href="#"
                                    class="block py-4 font-bold tracking-wide text-gray-700 uppercase">Contacto</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>