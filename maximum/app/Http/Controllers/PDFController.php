<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDFCompra(Request $request)
    {
        $pedido = Pedido::findOrFail($request->id);
        $user = User::findOrFail($pedido->user_id);
        $data = [
            'fecha' => date('m/d/Y'),
            'pedido' => $pedido,
            'usuario' => $user
        ];
        $pdf = PDF::loadView('pdfs.PDFCompra', $data);
        $pdf->render();

        return $pdf->stream('invoice.pdf');;
    }
}
