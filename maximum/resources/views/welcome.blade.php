<x-app-layout>

    <div class="home-img flex justify-center">
        {{-- <img src="img/portada-1.jpeg" class="object-cover"> --}}
        {{-- <div class="flex flex-col justify-end mb-28">
            <a href="#">
                <div class="btn-us font-semibold uppercase py-4 px-8 rounded">
                    <span>Sobre Nosotros</span>
                </div>
            </a>
        </div> --}}
    </div>
    <div class="wave">
        <svg class="editorial rotate-180 pb-0" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none">
            <defs>
                <path id="gentle-wave"
                    d="M-160 44c30 0
                        58-18 88-18s
                        58 18 88 18
                        58-18 88-18
                        58 18 88 18
                        v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="50" y="0" fill="#212121" />
            </g>
        </svg>
    </div>
    <div class="h-fit bg-white py-10">
        <div class="flex justify-around">
            <img src="img/element-1.png" class="mr-auto w-2/5 ml-auto ">
            <div class="w-2/4 ml-auto my-auto">
                <h1 class="uppercase font-bold text-center text-6xl ">lorem</h1>
                <p class="mx-24 mt-10">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur corrupti
                    animi iusto voluptatem
                    voluptas odit doloribus, incidunt nemo. Incidunt eius consequatur aperiam ab, quas voluptate nam
                    molestias! Harum, soluta eveniet.</p>
            </div>
        </div>
        <div class="flex justify-around">
            <div class="w-2/4 ml-auto my-auto">
                <h1 class="uppercase font-bold text-center text-6xl ">lorem</h1>
                <p class="mx-24 mt-10">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur corrupti
                    animi iusto voluptatem
                    voluptas odit doloribus, incidunt nemo. Incidunt eius consequatur aperiam ab, quas voluptate nam
                    molestias! Harum, soluta eveniet.</p>
            </div>
            <img src="img/element-2.png" class="mr-auto w-2/5 ml-auto">
        </div>
    </div>
    <div class="pt-24">
        <!--
        Falta carrousel productos
        -->
        <div class="containerSwiper my-10 mx-auto ">
            <h5 class="text-4xl pb-8">Productos</h5>
            <hr>
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($productos as $producto)
                        <div class="swiper-slide">
                            <div class="bg-white shadow-md rounded-lg max-w-sm ">
                                <a href="{{route('product.view', $producto->id)}}">
                                    <img class="rounded-t-lg p-8" src="{{ '/' . $producto->ruta_imagen }}"
                                        alt="product image">
                                </a>
                                <div class="px-5 pb-5">
                                    <a href="#">
                                        <h3 class="text-gray-900 font-semibold text-xl tracking-tight ">
                                            {{ $producto->nombre }}</h3>
                                    </a>
                                    <div class="flex items-center mt-2.5 mb-5">
                                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                            </path>
                                        </svg>
                                        <span
                                            class="bg-amber-300 text-amber-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded ml-3">5.0</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-3xl font-bold text-gray-900">{{ $producto->precio }}
                                            €/und</span>
                                        <a href="#"
                                            class="text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center pintada">Comprar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Controladores Carrusel -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
    <div>
        <svg class="editorial" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none">
            <defs>
                <path id="gentle-wave"
                    d="M-160 44c30 0
                        58-18 88-18s
                        58 18 88 18
                        58-18 88-18
                        58 18 88 18
                        v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="50" y="0" fill="#242424" />
            </g>
        </svg>
    </div>

    <div class="h-fit flex contact-welcome pt-28">

        <div class="h-3/5 w-full text-white flex flex-col pl-24 justify-center form-back gap-12">
            <div class="flex justify-start">
                <svg width="24" height="24" viewBox="0 0 800 800" fill="none">
                    <path
                        d="M356.875 776.875C378.125 800.625 413.75 800.625 435 776.25C436.875 774.375 440.625 770 446.25 763.75C455.625 753.75 465.625 741.875 476.25 728.75C507.5 691.875 538.75 651.875 568.125 611.25C597.5 570.625 623.125 530.625 643.75 493.125C682.5 423.75 703.75 363.75 703.75 314.375C704.375 140.625 566.25 0 395.625 0C225 0 87.5 140.625 87.5 314.375C87.5 363.75 108.75 424.375 147.5 493.75C168.75 531.25 194.375 571.25 223.125 611.875C252.5 652.5 283.75 692.5 315 729.375C326.25 742.5 336.25 754.375 345 764.375C351.25 770.625 355 775 356.875 776.875ZM384.375 751.25C382.5 749.375 378.75 745 373.125 738.75C364.375 728.75 354.375 716.875 343.75 704.375C313.125 668.125 282.5 628.75 253.75 589.375C225 549.375 200 511.25 180 475C144.375 410.625 125 355.625 125 314.375C125 161.875 246.25 38.125 395.625 38.125C545 38.125 666.875 161.875 666.875 314.375C666.875 355.625 647.5 410.625 611.875 474.375C591.875 510.625 566.875 549.375 538.125 588.75C509.375 628.75 478.75 667.5 448.125 703.75C437.5 716.25 427.5 728.125 418.75 738.125C413.125 744.375 409.375 748.125 407.5 750.625C400.625 758.125 391.25 758.75 384.375 751.25Z"
                        fill="white" />
                    <path
                        d="M395.625 451.875C311.25 451.875 242.5 383.125 242.5 298.75C242.5 214.375 311.25 145.625 395.625 145.625C480 145.625 548.75 214.375 548.75 298.75C548.75 383.125 480 451.875 395.625 451.875ZM395.625 183.125C331.875 183.125 280 235 280 298.75C280 362.5 331.875 414.375 395.625 414.375C459.375 414.375 511.25 362.5 511.25 298.75C511.25 235 459.375 183.125 395.625 183.125Z"
                        fill="white" />
                </svg>
                <span class="ml-6 font-bold">UBICACIÓN<span>
                        <br>
                        <span class="font-normal">Crtra, Calle Fuente Alhama, km 0.1<br> 14800 Priego de Córdoba,
                            Córdoba</span>
            </div>
            <div class="flex justify-start">
                <svg width="24" height="24" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.9 18.2C18.4 18.7 18 19.3 17.6 20C15.6 18.3 13.7 16.5 12 14.4C12.7 14.1 13.3 13.6 13.8 13.1C16.1 10.8 15.3 7.8 13 5.5C10.7 3.2 7.7 2.3 5.4 4.6C3.1 6.9 2.7 11.2 4.6 13.9C7.9 19 13 24.1 18.1 27.5C20.8 29.3 25.1 29 27.4 26.7C29.7 24.4 28.9 21.4 26.6 19.1C24.3 16.8 21.3 15.8 18.9 18.2Z"
                        stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linejoin="round" />
                </svg>
                <span class="ml-6 font-bold">LLÁMANOS<span>
                        <br>
                        <span class="font-normal">957 70 05 43</span>

            </div>

            <div class="flex justify-start">
                <svg width="24" height="24" viewBox="0 0 800 800" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2_7)">
                        <path
                            d="M400 0C179.1 0 0 179.075 0 400C0 620.925 179.075 800 400 800C620.925 800 800 620.925 800 400C800 179.075 620.925 0 400 0ZM400 750.8C207 750.8 50 593 50 400C50 207 207 50 400 50C593 50 750 207 750 400C750 593 593 750.8 400 750.8ZM425 389.85V150C425 136.2 413.8 125 400 125C386.2 125 375 136.2 375 150V400C375 407.075 377.95 413.425 382.7 417.975C383.125 418.475 383.45 419 383.9 419.45L507.625 543.2C517.375 552.95 533.2 552.95 542.975 543.2C552.75 533.45 552.725 517.6 542.975 507.825L425 389.85Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2_7">
                            <rect width="800" height="800" fill="white" />
                        </clipPath>
                    </defs>
                </svg>

                <span class="ml-6 font-bold">HORARIO<span>
                        <br>
                        <span class="font-normal">Mañanas: Lun - Sáb ... 9.00 - 14.00</span>
                        <br>
                        <span class="font-normal">Tardes: Lun - Vie ... 16.00 - 20.00</span>

            </div>



        </div>

        <div class=" w-2/5 mr-24 ml-auto form rounded ">
            <form action="{{ route('avisos.store') }}" method="POST">
                @csrf
                <img src="img/perro-8.png" class="perro">
                <div class="p-16">
                    <h1 class="uppercase text-5xl">CONTÁCTENOS</h1>
                    <div class="w-100 mt-8">
                        <div class="form__group field mt-6">
                            <input type="input" class="form__field" placeholder="Name" name="nombre"
                                id='name' required />
                            <label for="nombre" class="form__label">Nombre</label>
                        </div>
                        <div class="form__group field mt-6">
                            <input type="input" class="form__field" placeholder="Email" name="email"
                                id='email' required />
                            <label for="email" class="form__label">Email</label>
                        </div>
                        <div class="form__group field mt-6">
                            <input type="input" class="form__field" placeholder="Asunto" name="asunto"
                                id='asunto' required />
                            <label for="asunto" class="form__label">Asunto</label>
                        </div>
                        <div class="form__group field mt-6">
                            <textarea type="input" class="form__field" placeholder="Cuerpo" name="cuerpo" id='asunto' required
                                style="resize: none;" rows="3"></textarea>
                            <label for="cuerpo" class="form__label">Cuerpo</label>
                        </div>
                        <div class="flex justify-center">
                            <div class=" text-center mb-14 w-56 btn-us">
                                <input type="submit" class="btn-us w-50 font-semibold uppercase py-4 px-8 rounded"
                                    value="Enviar">
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
