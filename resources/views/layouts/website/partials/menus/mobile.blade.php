<div class="absolute top-0 right-0 w-full max-w-sm px-6 py-2 m-2 mt-8 font-bold text-gray-500 bg-white rounded-lg shadow-lg"
    x-show="open" @click.away="open = false">

    <div class="flex justify-end mb-4">
        <svg class="w-6 h-6 cursor-pointer fill-current hover:text-gray-900" @click="open = false" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M10 8.586L2.929 1.515 1.515 2.929 8.585 10l-7.07 7.071 1.414 1.414L10 11.415l7.071 7.07 1.414-1.414L11.415 10l7.07-7.071-1.414-1.414L10 8.585z" />
        </svg>
    </div>

    <div>
        <a href="#" class="block font-bold hover:text-gray-900">Inicio</a>

        <div x-data="{ open: false }">
            <div class="flex justify-between pt-4">
                <a href="/nosotros" class="font-bold hover:text-gray-900">Nosotros</a>

                <svg x-show="!open" @click="open = true" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                </svg>
                <svg x-show="open" @click="open = false" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

            <div x-show="open" class="mt-2">
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Naturelek contigo</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Trabaja con nosotros</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Casos de éxito</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">RSC</a>
            </div>
        </div>

        <div x-data="{ open: false }">
            <div class="flex justify-between pt-4">
                <a href="#" class="font-bold hover:text-gray-900">Sectores</a>

                <svg x-show="!open" @click="open = true" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                </svg>
                <svg x-show="open" @click="open = false" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

            <div x-show="open" class="mt-2">
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Público</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Inmobiliario (comunidad de propietarios)</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Hostelería</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Industria</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Agrario</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Transporte</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Asociaciones</a>
            </div>
        </div>

        <div x-data="{ open: false }">
            <div class="flex justify-between pt-4">
                <a href="#" class="font-bold hover:text-gray-900">Servicios</a>
                <svg x-show="!open" @click="open = true" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                </svg>
                <svg x-show="open" @click="open = false" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

            <div x-show="open" class="mt-2">
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Gestión energética</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Autoconsumo</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Iluminación LED</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Monitorización</a>

                <div x-data="{ open: false }">
                    <div class="flex justify-between py-2 pt-2">
                        <a href="#" class="px-4 hover:text-gray-900">Tecnología</a>
                        <svg x-show="!open" @click="open = true" class="w-6 h-6 cursor-pointer fill-current"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                        </svg>
                        <svg x-show="open" @click="open = false" class="w-6 h-6 cursor-pointer fill-current"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>

                    <div x-show="open" class="px-4">
                        <a href="#" class="block px-4 py-2 hover:text-gray-900">Naturbox</a>
                        <a href="#" class="block px-4 py-2 hover:text-gray-900">Domótica</a>
                        <a href="#" class="block px-4 py-2 hover:text-gray-900">Electrolineras</a>
                    </div>
                </div>

                <a href="#" class="block px-4 py-2 hover:text-gray-900">Financiación e inversión</a>
            </div>
        </div>

        <div x-data="{ open: false }">
            <div class="flex justify-between pt-4">
                <a href="#" class="font-bold hover:text-gray-900">Consultoría energética</a>
                <svg x-show="!open" @click="open = true" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                </svg>
                <svg x-show="open" @click="open = false" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

            <div x-show="open" class="mt-2">
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Auditorías</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Eficiencia energética</a>
            </div>
        </div>

        <a href="#" class="block pt-4 font-bold hover:text-gray-900">Noticias</a>

        <a href="#" class="block py-4 font-bold hover:text-gray-900">Contacto</a>
    </div>

    <div class="py-4 border-t border-gray-500">
        <div x-data="{ open: false }">
            <div class="flex justify-between"> <span class="font-bold">Acceso</span>
                <svg x-show="!open" @click="open = true" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                </svg>
                <svg x-show="open" @click="open = false" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

            <div x-show="open" class="mt-2">
                <a href="http://naturelek.wolfcrm.es/index.php" class="block px-4 py-2 hover:text-gray-900">CRM</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Usuarios</a>
                <a href="http://medidas.naturelek.com/" class="block px-4 py-2 hover:text-gray-900">Telemedidas</a>
            </div>
        </div>

        <div x-data="{ open: false }">
            <div class="flex justify-between pt-4">
                <a href="#" class="font-bold hover:text-gray-900">Trabaja con nosotros</a>

                <svg x-show="!open" @click="open = true" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                </svg>
                <svg x-show="open" @click="open = false" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

            <div x-show="open" class="mt-2">
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Colaborador</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Comercial</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Naturelek Contigo</a>
            </div>
        </div>

        <div x-data="{ open: false }">
            <div class="flex justify-between pt-4">
                <span class="font-bold">Idiomas</span>

                <svg x-show="!open" @click="open = true" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                </svg>
                <svg x-show="open" @click="open = false" class="w-6 h-6 cursor-pointer fill-current" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
            </div>

            <div x-show="open" class="mt-2">
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Inglés</a>
                <a href="#" class="block px-4 py-2 hover:text-gray-900">Euskera</a>
            </div>
        </div>
    </div>
</div>