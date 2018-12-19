<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        $users = User::count();

        $total = 0;
        foreach ($orders as $orderTotal) {
            $total += $orderTotal->total;
        }

        $pendientes=0;
        foreach ($orders as $pendingOrder) {
            if ($pendingOrder->status == 'Pendiente') {
                $pendientes ++;
            }
        }
        return view('admin.index', compact('orders', 'total', 'pendientes','users'));
    }
}