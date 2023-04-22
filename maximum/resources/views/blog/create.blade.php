<x-app-layout>
    <div class="bg-white h-screen pt-24 ">
        <form action="{{route('noticia.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mx-96 justify-center">
                <div class="w-full">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" placeholder="Titulo">

                </div>
                <div class="w-full">
                    <label for="cuerpo">Cuerpo</label>
                    <textarea name="cuerpo" id="tinymce" cols="30" rows="10"></textarea>

                </div>
                <div class="w-full">
                    <label for="imagen">Portada</label>
                    <input type="file" id="imagen" name="imagen">
                </div>
                <input type="submit" value="Crear">
            </div>

        </form>
    </div>
</x-app-layout>
