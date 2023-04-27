<x-app-layout>
    <div class="bg-white h-fit pt-24 blog">
        <div class="mx-56">
            <h1 class="text-3xl m-5 font-bold">Blog</h1>
            <hr>
        </div>
        <div class="p-16 grid grid-cols-3 gap-14 mx-44">
            @foreach ($noticias as $noticia)
                <article class="card card--2">
                    <div class="card__info-hover">
                        <div class="card__clock-info">
                            <span class="card__time">{{ $noticia->created_at->format('d/m/Y') }}</span>
                        </div>
                    </div>
                    <div class="">
                        <img src="{{ '/storage/' . $noticia->ruta_imagen }}" class="card__img">
                    </div>
                    <div class="card__info">
                        <span class="card__category">NOTICIA</span>
                        <h3 class="card__title">{{ $noticia->titulo }}</h3>

                    </div>
                    <div class="flex justify-between w-full h-auto px-3 mb-3">
                        <span class="card__by flex ml-5 mt-4">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="24" height="24" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_1_3" transform="scale(0.0416667)" />
                                    </pattern>
                                    <image id="image0_1_3" width="24" height="24"
                                        xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAnElEQVR4nO2UTQrCQAyFo4cTt4kbb+KiGeZA5p1J0GP4U2nprNrilHRgUD+YVeB9TAiP6E8uaHhvKjcEaT3PglzPzWE3EnQDbziSROUy/sEwJAcxxm2fo/z8EQEyd16vYClJYEFedQiQsZa6BUv5HgGmcrxlZyp3KB9nBX1duxuVH2tsYhIonz5d2aoSKgUGSTFBh6nElmhTVJJ4A28et81MzgbWAAAAAElFTkSuQmCC" />
                                </defs>
                            </svg>
                            <span class="ml-2"> {{ $noticia->comentarios->count() }} comentarios.</span>
                        </span>
                        <a href="{{ route('noticia.show', $noticia->id) }}">
                            <button class="btn-us w-full float-right px-5"> Ver más</button>
                        </a>
                    </div>
                </article>
            @endforeach

        </div>
        @auth
            @if (Auth::user()->rol == 'admin')
                <a href="{{ route('blog.create') }}" class="btn-flotante">Crear</a>
            @endif
        @endauth

    </div>
</x-app-layout>
