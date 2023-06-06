<div class="fixed top-0 left-0 w-full z-50 h-screen  flex  justify-center items-center animated fadeIn faster"
    style="background: rgba(0,0,0,.7);">

    <div class="border border-blue-500 modal-container my-4 lg:my-16 bg-white  mx-4 lg:mx-auto w-full lg:w-7/12 rounded-xl shadow-lg z-50 overflow-y-scroll"
        style="height: 54%">
        <div class=" py-4 text-left px-4">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-xl font-bold text-gray-500">Aviso</p>
                <div class="modal-close cursor-pointer z-50" wire:click="cerrarModal('modalNoticia')">
                    <svg class="fill-current text-gray-500" xmlns="http://www.w3.org/2000/svg" width="18"
                        height="18" viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>
            <!--Body-->
            <div class="my-3 mx-1 lg:mx-4 flex flex-col justify-center gap-8">
                <div class="flex flex-col gap-4 border border-gray-300 p-3 rounded-xl">
                    <div class="flex flex-row justify-between">
                        <div>
                            <label class="font-semibold">{{ $verAviso->nombre }}</label><span
                                class="text-sm text-gray-600">
                                < {{ $verAviso->email }} >
                            </span>
                        </div>
                        <div>
                            {{$verAviso->created_at->format('d-m-Y H:i:s')}}
                        </div>
                    </div>
                    <hr class="-mt-3">
                    <div>
                        <label class="font-bold">Asunto:</label> <span class="font-semibold">{{ $verAviso->asunto }}</span>
                    </div>
                    <div>
                        <p class="">{{ $verAviso->cuerpo }}</label>
                    </div>
                </div>
                <div class="flex justify-end pt-2 space-x-6">
                    <a href="#" wire:click="cerrarModal('modalNoticia')" class="px-3 text-center py-2 hover:no-underline cursor-pointer">Cerrar</a>

                    <a href="mailto:{{$verAviso->email}}" class="px-3 text-center py-2 buttonGeneral cursor-pointer">Enviar email</a>
                </div>
            </div>

        </div>
    </div>

</div>
