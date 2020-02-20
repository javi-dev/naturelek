@extends('layouts.website.index')

@section('title', 'Servicios Energéticos Generales - Naturelek')

@section('content')

<div class="text-gray-900 bg-white">
    <div class="max-w-md px-2 mx-auto mt-10 lg:max-w-6xl lg:px-20">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-1/2">
                <h1 class="text-4xl font-black tracking-tight text-gray-700">Servicios</h1>
                <p class="mt-6">
                    <em>Imágenes en galería con botones que conecten a servicios Gestión energética, Autoconsumo,
                        Iluminación LED, Servicios Específicos y Tecnología. Cada una imagen, interactiva, que se
                        agrande al pasar.
                    </em>
                </p>
                <p class="mt-6">
                    El mercado energético es uno de los <strong class="font-bold">mercados más complejos</strong>,
                    con mayores cambios regulatorios y con multitud de conceptos de facturación (tanto regulados como
                    libres) que requieren de un conocimiento profundo del sector para poder determinar, según cada
                    empresa, sus características de consumo y su perfil horario; cuáles son las condiciones
                    contractuales más ventajosas.
                </p>
                <p class="mt-6">
                    En Naturelek Consulting le ofrecemos un <strong class="font-bold">servicio de gestión
                        integral</strong> donde se incluye la revisión y análisis de las condiciones contractuales con
                    respecto al actual comercializador, la optimización de los suministros según sus necesidades de
                    consumo, la mejora de las instalaciones lumínicas, así como servicios de auditoría energética.
                    Analizamos tanto las facturas de Electricidad como de Gas Natural, Gas Propano, Gasóleo A y B,
                    Pellet, etc.
                </p>
                <p class="mt-6">
                    <em>Imagen de naturelek</em>
                </p>
                <p class="mt-6">
                    Somos expertos en negociar el mejor contrato con la mejor tipología según su perfil de consumo,
                    evitando desviaciones de energía y de manera que <strong class="font-bold">únicamente pague por lo
                        que consume y al mejor precio</strong>. Nuestro objetivo es que usted se pueda centrar en su
                    negocio sabiendo que expertos gestionan la compra de todas las fuentes de energía en su empresa.
                </p>
                <p class="mt-6">
                    Las contrataciones energéticas pueden optimizarse acorde a las necesidades de cada cliente, para tal
                    efecto, deberá someterse a un <strong class="font-bold">análisis</strong> en profundidad sobre la
                    curva de carga (Historial de Consumos) de cada suministro, con el fin de establecer en base a una
                    comparativa de ofertas, cuál es la que más se adapte a lo que se requiere, por precio, por tarifa,
                    por servicio, por valores agregados, por unificación, etc.
                </p>
                <p class="mt-6">
                    Por esta razón, <strong class="font-bold">la optimización representa beneficios, ahorro, calidad de
                        suministro, posicionamiento en el mercado y reducción de coste</strong> unitario de cada
                    línea de producción. En el mercado energético español existe una diversidad muy amplia de servicios
                    y alternativas de valor que pueden ayudar a desarrollar todo un proceso firme de optimización.
                </p>
                <p class="mt-6">
                    <em>Imagen de naturelek</em>
                </p>
            </div>

            <div class="w-full lg:w-1/2 lg:pl-12">
                <div class="p-12 mt-6 border border-gray-300 rounded-lg shadow">
                    <p class="text-xl font-bold text-center text-green-500">
                        Nuestro servicio integral incluye
                    </p>
                    <ul class="mt-6 list-inside">
                        <li class="flex items-center">
                            <svg class="flex-shrink-0 w-8 h-8 text-green-500 fill-current" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 11.9A5.002 5.002 0 0010 2a5 5 0 00-1 9.9V14h2v-2.1zm2 1.426a7 7 0 10-6 0V16h6v-2.674zM7 17h6v1.5c0 .828-.665 1.5-1.499 1.5H8.5A1.496 1.496 0 017 18.5V17z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span class="ml-3">Análisis de las facturaciones actuales (12 últimas facturas).</span>
                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="flex-shrink-0 w-8 h-8 text-green-500 fill-current" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 11.9A5.002 5.002 0 0010 2a5 5 0 00-1 9.9V14h2v-2.1zm2 1.426a7 7 0 10-6 0V16h6v-2.674zM7 17h6v1.5c0 .828-.665 1.5-1.499 1.5H8.5A1.496 1.496 0 017 18.5V17z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span class="ml-3">Análisis de las condiciones contractuales y parámetros de
                                contratación.</span>
                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="flex-shrink-0 w-8 h-8 text-green-500 fill-current" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 11.9A5.002 5.002 0 0010 2a5 5 0 00-1 9.9V14h2v-2.1zm2 1.426a7 7 0 10-6 0V16h6v-2.674zM7 17h6v1.5c0 .828-.665 1.5-1.499 1.5H8.5A1.496 1.496 0 017 18.5V17z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span class="ml-3">Prospección de las tarifas eléctricas óptimas.</span>
                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="flex-shrink-0 w-8 h-8 text-green-500 fill-current" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 11.9A5.002 5.002 0 0010 2a5 5 0 00-1 9.9V14h2v-2.1zm2 1.426a7 7 0 10-6 0V16h6v-2.674zM7 17h6v1.5c0 .828-.665 1.5-1.499 1.5H8.5A1.496 1.496 0 017 18.5V17z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span class="ml-3">Prospección de condiciones de contratación mejores.</span>
                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="flex-shrink-0 w-8 h-8 text-green-500 fill-current" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 11.9A5.002 5.002 0 0010 2a5 5 0 00-1 9.9V14h2v-2.1zm2 1.426a7 7 0 10-6 0V16h6v-2.674zM7 17h6v1.5c0 .828-.665 1.5-1.499 1.5H8.5A1.496 1.496 0 017 18.5V17z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span class="ml-3">Detección de errores en facturación.</span>
                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="flex-shrink-0 w-8 h-8 text-green-500 fill-current" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 11.9A5.002 5.002 0 0010 2a5 5 0 00-1 9.9V14h2v-2.1zm2 1.426a7 7 0 10-6 0V16h6v-2.674zM7 17h6v1.5c0 .828-.665 1.5-1.499 1.5H8.5A1.496 1.496 0 017 18.5V17z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span class="ml-3">Entrega de informe de las condiciones actuales y mejoras
                                aplicables.</span>
                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="flex-shrink-0 w-8 h-8 text-green-500 fill-current" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 11.9A5.002 5.002 0 0010 2a5 5 0 00-1 9.9V14h2v-2.1zm2 1.426a7 7 0 10-6 0V16h6v-2.674zM7 17h6v1.5c0 .828-.665 1.5-1.499 1.5H8.5A1.496 1.496 0 017 18.5V17z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span class="ml-3">Soporte y tramitación de modificaciones y nuevas altas
                                contractuales.</span>
                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="flex-shrink-0 w-8 h-8 text-green-500 fill-current" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 11.9A5.002 5.002 0 0010 2a5 5 0 00-1 9.9V14h2v-2.1zm2 1.426a7 7 0 10-6 0V16h6v-2.674zM7 17h6v1.5c0 .828-.665 1.5-1.499 1.5H8.5A1.496 1.496 0 017 18.5V17z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span class="ml-3">Tramitación de la reclamación de errores si se detectan.</span>
                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="flex-shrink-0 w-8 h-8 text-green-500 fill-current" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 11.9A5.002 5.002 0 0010 2a5 5 0 00-1 9.9V14h2v-2.1zm2 1.426a7 7 0 10-6 0V16h6v-2.674zM7 17h6v1.5c0 .828-.665 1.5-1.499 1.5H8.5A1.496 1.496 0 017 18.5V17z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span class="ml-3">Gestión, soporte y asistencia en las negociaciones.</span>
                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="flex-shrink-0 w-8 h-8 text-green-500 fill-current" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 11.9A5.002 5.002 0 0010 2a5 5 0 00-1 9.9V14h2v-2.1zm2 1.426a7 7 0 10-6 0V16h6v-2.674zM7 17h6v1.5c0 .828-.665 1.5-1.499 1.5H8.5A1.496 1.496 0 017 18.5V17z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span class="ml-3">Unificación de inicio y vencimiento de diferentes suministros, en caso de
                                disponer de varios contratos.</span>
                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="flex-shrink-0 w-8 h-8 text-green-500 fill-current" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 11.9A5.002 5.002 0 0010 2a5 5 0 00-1 9.9V14h2v-2.1zm2 1.426a7 7 0 10-6 0V16h6v-2.674zM7 17h6v1.5c0 .828-.665 1.5-1.499 1.5H8.5A1.496 1.496 0 017 18.5V17z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span class="ml-3">Ajuste de potencia para evitar costes innecesarios y
                                penalizaciones.</span>
                        </li>
                        <li class="flex items-center mt-6">
                            <svg class="flex-shrink-0 w-8 h-8 text-green-500 fill-current" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 11.9A5.002 5.002 0 0010 2a5 5 0 00-1 9.9V14h2v-2.1zm2 1.426a7 7 0 10-6 0V16h6v-2.674zM7 17h6v1.5c0 .828-.665 1.5-1.499 1.5H8.5A1.496 1.496 0 017 18.5V17z"
                                    fill-rule="evenodd" />
                            </svg>
                            <span class="ml-3">Identificación e instalación de los equipos necesarios para corregir las
                                penalizaciones por el consumo de energía reactiva en caso de existir.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection