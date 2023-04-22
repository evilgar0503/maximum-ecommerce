<x-app-layout>
    <div class="bg-white h-fit pt-24">

        <div class="p-16 grid grid-cols-3 gap-14">
            @foreach ($noticias as $noticia)
                <a href="#">
                    <div class="bg-blue-500 notice">
                        <div class="contain-img flex justify-center ">
                            <img src="{{ 'storage/' . $noticia->ruta_imagen }}" class="img-notice">

                        </div>
                        <div class="py-4 px-6">
                            <p class="font-bold text-2xl">{{ $noticia->titulo }}</p>
                        </div>
                        <div class="flex justify-between">
                            <div class="">
                                Hola
                            </div>
                            <div class="">
                                Adios
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>

    </div>
</x-app-layout>
