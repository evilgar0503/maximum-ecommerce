@extends('layouts.admin')

@section('content')
    <div class="p-4">
        <div class="lg:w-full">
            <h1 class="text-xl font-semibold">Mis Datos</h1>
            <div class="w-full mx-auto rounded-2xl divData mt-4 p-4 lg:p-8">
                <div class="lg:flex items-center">
                    <div class=" flex columna items-center mb-4">
                        <img src="{{ '/storage/' . auth()->user()->ruta_imagen }}" class="ml-8 rounded-full w-24 h-24 lg:w-36 lg:h-36 object-fill">
                        <div class="flex flex-col ml-8">
                            <h1 class="text-lg font-bold lg:mt-8">{{ auth()->user()->nombre }} {{ auth()->user()->apellidos }}</h1>
                            <h1 class="text-sm font-light text-gray-500">{{ auth()->user()->rol }}</h1>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/3 ml-auto lg:justify-end">
                        <div class="bg-white rounded-2xl py-8 lg:py-16 px-8 text-center">
                            <span class="font-bold text-4xl">0</span>
                            <br>
                            <span class="font-light text-lg">pedidos realizados</span>
                            <button class="block mx-auto mt-4 px-2 py-1 text-sm rounded border-b-slate-400 border-2 hover:-translate-y-1 ease-out duration-300"> Ver pedidos</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="mt-8">
            <h1 class="text-xl font-semibold">Datos de mi cuenta</h1>
            <div class="w-full mx-auto rounded-2xl divData mt-4 p-8">
                @include('profile.partials.update-profile-information-form')

            </div>
        </div>
        <div class="mt-8">
            <h1 class="text-xl font-semibold">Dirección</h1>
            <div class="w-full mx-auto rounded-2xl divData mt-4 p-8">
                @include('profile.partials.update-profile-address')

            </div>
        </div>
        <div class="mt-8">
            <h1 class="text-xl font-semibold">Contraseña</h1>
            <div class="w-full mx-auto rounded-2xl divData mt-4 p-8">
                @include('profile.partials.update-password-form')

            </div>
        </div>
        <div class="mt-8">
            <h1 class="text-xl font-semibold">Eliminar cuenta</h1>
            <div class="w-full mx-auto rounded-2xl divData mt-4 p-8">
                @include('profile.partials.delete-user-form')

            </div>
        </div>

    </div>
@endsection
