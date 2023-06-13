<?php

namespace App\Http\Controllers;

use App\Models\Avisos;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderPendientes = Pedido::where('estado', 'like', 'pendiente')->get(); // pedidos en estado de pendiente
        $productos = Producto::all(); // total de productos registrados
        $users = User::all(); // total de usuarios registrados
        $registrados = User::orderBy('created_at', 'desc')->take(6)->get(); //ultimos usuarios registrados
        $avisos = Avisos::orderBy('created_at', 'desc')->take(6)->get(); //ultimos avisos recibidos
        $pedidos = Pedido::orderBy('fecha', 'desc')->take(6)->get(); //ultimos pedidos recibidos



        $fechaInicio = Carbon::now()->subMonth()->startOfMonth();
        $fechaFin = Carbon::now()->endOfMonth();
        $vendido = Pedido::whereBetween('fecha', [$fechaInicio, $fechaFin])->sum('precio_total'); //total vendido en el ultimo mes

        return view('admin.index')->with(['ordersPendientes' => count($orderPendientes), 'productos' => count($productos), 'users' => count($users), 'vendido' => $vendido, 'registrados' => $registrados, 'avisos' => $avisos, 'pedidos' => $pedidos] );
    }

    /**
     * Display a listing of the resource.
     */
    public function users()
    {
        return view('admin.users');
    }

    /**
     * Display a listing of the resource.
     */
    public function products()
    {
        return view('admin.products');
    }

    public function metodoPago()
    {
        return view('admin.pago');
    }

    public function metodoEnvio()
    {
        return view('admin.envio');
    }

    public function avisos()
    {
        return view('admin.avisos');
    }

    public function pedidos()
    {
        return view('admin.pedidos');
    }


}
