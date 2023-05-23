<!DOCTYPE html>
<html>

<head>
    <title>Factura Maximum</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url('img/fondo-factura.jpg');
            background-repeat: no-repeat;
            background-size: contain;
            width: 100%;
            height: 100%;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .invoice-box {
            max-width: 800px;
            margin: 0px 100px;
            padding: 30px;
            font-size: 15px;
            line-height: 24px;
            color: #555;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }

        .section1 {
            /* margin-top: 140px; */
            float: left;
            padding-right: 10%;
            box-sizing: border-box;
            width: 50%;
        }

        .section {
            margin-top: 170px;
        }

        .section-products {
            margin-top: 250px;
        }

        .info {
            margin-bottom: 2px;
        }

        table {
            width: 100%;
            line-height: inherit;
        }

        table td {
            padding: 5px;
            vertical-align: top;
        }

        table th {
            padding: 5px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }
    </style>

</head>


<body>

    <div class="invoice-box">
        <div class="section" style="margin-bottom: 20px;">
            <div class="section1">
                <div class="section-title">Información de la Empresa</div>
                <div class="info">Fitozoo S.L - B56103286</div>
                <div class="info">Crt. Fuente Alhama km 0,1</div>
                <div class="info">14800, Priego de Córdoba, Córdoba, España</div>

                <!-- Añade más información de la empresa aquí -->
            </div>

            <div class="section1">
                <div class="section-title">Información del Cliente</div>
                <div class="info">{{ $pedido->fac_nombre }} {{ $pedido->fac_apellidos }} - {{ $pedido->fac_dni }}
                </div>
                <div class="info">{{ $pedido->fac_direccion }}</div>
                <div class="info">{{ $pedido->fac_cp }}, {{ $pedido->fac_ciudad }}, {{ $pedido->fac_provincia }},
                    {{ $pedido->fac_pais }} </div>


                <!-- Añade más información del cliente aquí -->
            </div>
        </div>


        <div class="section-products">
            <div class="section-title">Productos</div>
            <table>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                </tr>
                @foreach ($pedido->productosPedido()->get() as $product)
                    <tr>
                        <td>{{ $product->nombre }}</td>
                        <td>{{ $product->pivot->cantidad }}</td>
                        <td>{{ $product->pivot->precio_unidad }}€</td>
                        <td>{{ $product->pivot->precio_unidad * $product->pivot->cantidad }}€</td>
                    </tr>
                @endforeach
                @php
                    $total = $pedido->productosPedido->sum(function ($producto) {
                        return $producto->pivot->precio_unidad * $producto->pivot->cantidad;
                    });
                @endphp
                <tr>
                    <td></td>
                    <td></td>
                    <th>
                        Subtotal
                    </th>
                    <td>
                        {{ $total }}€
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <th>
                        Gastos de envío
                    </th>
                    <td>
                        {{ $pedido->metodoEnvio->cargo }}€
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <th>
                        Total
                    </th>
                    <td>
                        {{ $pedido->precio_total }}€
                    </td>
                </tr>


                <!-- Añade más productos aquí -->
            </table>
        </div>
    </div>
</body>

</html>
