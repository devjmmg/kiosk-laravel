<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->total = $request->total;
        $order->save();

        $id = $order->id;

        $order_products = [];
        $products = $request->products;
        foreach($products as $p) {
            $order_products[] = [
                'order_id' => $id,
                'product_id' => $p['id'],
                'quantity' => $p['quantity'],
                'subtotal' => $p['subtotal'],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        OrderProduct::insert($order_products);

        return [
            'message' => "El pedido se realizo correctamente"
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
