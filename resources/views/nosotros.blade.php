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

<body class="antialiased bg-gray-500">
    <nav>
    </nav>
    <div class="w-full p-4 lg:hidden">
        <div class="relative" x-data="{ open: false }" x-cloak>
            <svg class="absolute right-0 w-6 h-6 m-2" @click="open = true" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
            <div class="absolute right-0 z-50 w-full max-w-sm px-8 bg-white rounded-lg shadow-lg" x-show="open"
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
                            <a href="#" class="block py-2">Naturelek contigo</a>
                            <a href="#" class="block py-2">Trabaja con nosotros</a>
                            <a href="#" class="block py-2">Casos de éxito</a>
                            <a href="#" class="block py-2">RSC</a>
                        </div>
                    </div>

                    <div x-data="{ open: false }">
                        <div class="flex justify-between pt-4 font-bold tracking-wide text-gray-700">
                            <a href="#" class="uppercase">Sectores</a>
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
                                    <svg x-show="open" @click="open = false" class="flex-shrink-0 w-6 h-6 fill-current"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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

                            <a href="#" class="block pt-4 font-bold tracking-wide text-gray-700 uppercase">Financiación
                                e
                                inversión</a>

                            <a href="#" class="block pt-4 font-bold tracking-wide text-gray-700 uppercase">Noticias</a>

                            <a href="#" class="block py-4 font-bold tracking-wide text-gray-700 uppercase">Contacto</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-2 mt-8 bg-fixed bg-gray-200 sm:px-16">
        <div class="relative flex flex-col max-w-4xl mx-auto bg-cover">
            <img src="https://res.cloudinary.com/jaquanor/image/upload/v1579469565/naturelek/photo-1497366754035-f200968a6e72_yzznte.jpg"
                alt="Oficinas">
            <h1 class="text-4xl font-black text-gray-800 ">Nosotros</h1>
            <p class="mt-4 text-xs leading-loose text-justify md:text-lg md:leading-normal">
                Naturelek Consulting es una consultoría energética con gran proyección, cuyo nombre fue creado en
                junio
                del 2016. Anteriormente ya contábamos con la experiencia en la gestión de los recursos energéticos
                de
                nuestros clientes desde el año 2010, y desde entonces trabajamos día a día con profesionales y
                empresarios para ofrecer a nuestros clientes las mejores opciones energéticas del mercado.
            </p>
            <p class="mt-6 text-xs leading-loose text-justify md:text-lg md:leading-normal">
                Contamos para ello con un equipo humano de más de 120 personas, todos ellos profesionales con
                experiencia en el sector y una gran cartera de clientes. Trabajamos tanto en el mercado español como
                en
                el portugués, y ofrecemos cobertura nacional en el País Vasco, Cantabria, Asturias, Galicia,
                Castilla y
                León, Madrid, Castilla la Mancha, Andalucía, Islas Baleares, Cataluña, Aragón, Navarra y La Rioja.
            </p>
        </div>

        <div class="max-w-4xl mx-auto mt-6">
            <img src="https://res.cloudinary.com/jaquanor/image/upload/v1579469511/naturelek/photo-1557804506-669a67965ba0_onzftu.jpg"
                alt="Equipo">
            <h1 class="text-4xl font-black text-gray-800">¿Qué ofrecemos?</h1>
            <p class="mt-4 text-xs leading-loose text-justify md:text-lg md:leading-normal">
                En Naturelek Consulting estamos especializados tanto en el cliente particular como en asociaciones y
                grandes empresas. Te ofrecemos un servicio de gestión integral donde se incluye la revisión y
                análisis
                de las condiciones contractuales con respecto al actual comercializador, la optimización de los
                suministros según sus necesidades de consumo, la mejora de las instalaciones lumínicas, así como
                servicios de auditoría energética. Implantamos el control de mando y la contabilidad energética, que
                se
                traduce en un plan general energético para tu organización. Analizamos tanto las facturas de
                Electricidad como de Gas Natural, Gas Propano, Gasóleo A y B, Pellet, etc.
            </p>
            <p class="mt-6 text-xs leading-loose text-justify md:text-lg md:leading-normal">
                Nuestro compromiso es ofrecer una atención totalmente personalizada a cada necesidad, ofreciendo la
                mayor gama de productos energéticos del mercado, con operaciones totalmente adaptadas a cada cliente
                que
                redunden en la mejora de sus costes y equipamientos energéticos.
            </p>
            <div class="text-center">
                <a href="/servicios"
                    class="inline-block p-4 mt-4 font-bold text-white bg-green-500 rounded hover:bg-green-700">Conoce
                    nuestros servicios</a>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>