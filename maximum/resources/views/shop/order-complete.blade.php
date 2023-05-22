<x-app-layout>

    <div class="lg:mx-36 mt-32 ">
        <div class="w-full lg:w-3/4 px-4 lg:mx-auto flex flex-row justify-around gap-2 font-light">
            <div class="flex flex-col gap-2 w-1/3 lg:-mr-60 opacity-60">
                <div>
                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                        class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                </div>
                <div class="text-center font-semibold">
                    <span class="text-sm ">Información del pedido</span>
                </div>
            </div>
            <div class="flex flex-col gap-2 w-1/3 opacity-60">
                <div>
                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                        fill="currentColor" class="bi bi-journal-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                        <path
                            d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                        <path
                            d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                    </svg>
                </div>
                <div class="text-center">
                    <span class="text-sm ">Revisión</span>
                </div>
            </div>
            <div class="flex flex-col gap-2 w-1/3 lg:-ml-60 ">
                <div>
                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                        fill="currentColor" class="bi bi-gift-fill" viewBox="0 0 16 16">
                        <path
                            d="M3 2.5a2.5 2.5 0 0 1 5 0 2.5 2.5 0 0 1 5 0v.006c0 .07 0 .27-.038.494H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h2.038A2.968 2.968 0 0 1 3 2.506V2.5zm1.068.5H7v-.5a1.5 1.5 0 1 0-3 0c0 .085.002.274.045.43a.522.522 0 0 0 .023.07zM9 3h2.932a.56.56 0 0 0 .023-.07c.043-.156.045-.345.045-.43a1.5 1.5 0 0 0-3 0V3zm6 4v7.5a1.5 1.5 0 0 1-1.5 1.5H9V7h6zM2.5 16A1.5 1.5 0 0 1 1 14.5V7h6v9H2.5z" />
                    </svg>
                </div>
                <div class="text-center">
                    <span class="text-sm ">Completo</span>
                </div>
            </div>

        </div>
        <div class="w-1/5 lg:w-1/12 mx-auto -mb-12">
            <svg xmlns="http://www.w3.org/2000/svg" class="svgChecked " id="path2" viewbox="0 0 100 200">
                <g>
                    <path d="M0,50 A50,50 0 0,0 50,100" class="a1">
                        <animate id="a1" attributeName="stroke-dashoffset" attributeType="css" from="200"
                            to="0" begin="g.end" dur="2s" repeatCount="1" fill="freeze" />
                        <animate attributeName="stroke" attributeType="css" from="#212121" to="#f59e0b" begin="g.end"
                            dur="1s" repeatCount="1" fill="freeze" />
                    </path>
                    <path d="M50,100 A50,50 0 0,0 100,50" class="a2">
                        <animate attributeName="stroke" attributeType="css" from="#212121" to="#f59e0b" begin="g.end"
                            dur="1s" repeatCount="1" fill="freeze" />
                    </path>
                    <path d="M100,50 A50,50 0 0,0 50,0" class="a3">
                        <animate id="a3" attributeName="stroke-dashoffset" attributeType="css" from="200"
                            to="0" begin="g.end" dur="2s" repeatCount="0" fill="freeze" />
                        <animate attributeName="stroke" attributeType="css" from="#212121" to="#f59e0b" begin="g.end"
                            dur="1s" repeatCount="1" fill="freeze" />
                    </path>
                    <path d="M50,0 A50,50 0 0,0 0,50" class="a4">
                        <animate attributeName="stroke" attributeType="css" from="#212121" to="#f59e0b" begin="g.end"
                            dur="1s" repeatCount="1" fill="freeze" />
                    </path>
                    <animateTransform id="g" attributeName="transform" type="rotate" attributeType="css"
                        from="360,50,50" to="0,50,50" begin="0s" dur="1.5s" repeatCount="1.5"
                        fill="freeze" />
                </g>


                <path d="M25,50 L40,65 L75,40" class="check">
                    <!--   <path d="M50,25 L50,60 M48,70 L52,70 L52,72 L48,72"  class="check"> -->
                    <!--     <path d="M30,30 L70,70 M70,30 L30,70"  class="check"> -->
                    <animate attributeName="stroke-dashoffset" attributeType="css" from="200" to="0"
                        begin="g.end" dur="3s" repeatCount="1" fill="freeze" />
                    <animate attributeName="stroke" attributeType="css" from="#212121" to="#f59e0b"
                        begin="g.end" dur="1s" repeatCount="1" fill="freeze" />
                </path>
            </svg>
        </div>
        <div class="w-full mb-16 text-center">
            <h1 class="text-xl font-bold">Pedido realizado correctamente</h1>
            <h2 class="text-lg font-light">Cod. Seguimiento: <span class="font-semibold">{{ $order[0]->cod_seguimiento }}</span></h2>
            <p class="text-gray-500 text-xs mx-4">Si desea consultar la información de su pedido, puede encontrarla en su <a href="{{route('dashboard')}}" class="text-amber-500">perfil</a>.</p>
        </div>

        {{-- <div class="w-full flex flex-col -mt-36">
            <div class="w-full font-bold p-1 border-b border-amber-500">
                Resumen pedido
            </div>
            <div class="mt-2 flex flex-col w-full gap-4 mx-2 lg:mx-8">
                <div class="w-1/2">
                    <label class="font-semibold text-xs mb-2">Codigo seguimiento</label>
                    <p class="text-xs">{{ $order[0]->cod_seguimiento }}</p>
                </div>
                <div class="w-1/2">
                    <label class="font-semibold text-xs mb-2">Fecha pedido</label>
                    <p class="text-xs">{{ $order[0]->fecha }}</p>
                </div>
                <div class="w-1/2">
                    <label class="font-semibold text-xs mb-2">Método pago</label>
                    <p class="text-xs">{{ $order[0]->metodo_pago_id }}</p>
                </div>
            </div>
        </div> --}}
    </div>
</x-app-layout>
