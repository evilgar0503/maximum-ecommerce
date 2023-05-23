<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function generatePDFUser()
    // {
    //     $users = User::get();

    //     $data = [
    //         'title' => 'Hotel Príncipe Pío',
    //         'date' => date('m/d/Y'),
    //         'users' => $users
    //     ];

    //     $pdf = PDF::loadView('pdfs.PDFUser', $data);

    //     return $pdf->download('users.pdf');
    // }


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
