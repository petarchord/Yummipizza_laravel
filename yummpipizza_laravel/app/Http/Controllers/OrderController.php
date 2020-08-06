<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function store()
    {
        //pass in the request array of pizza id's and quantities
        $data = request()->validate([
            'name' => ['required', 'string'],
            'address' => ['required','string'],
            'phone' => ['required','string'],
            'bill' => ['required'],
            'orders' => ['required']
        ]);

        $order = new \App\Order();
        $order->client_name = $data['name'];
        $order->client_address = $data['address'];
        $order->client_phone = $data['phone'];
        $order->bill = $data['bill'];
        $order->save();

        $orders = $data['orders'];
        $pizza = new \App\Pizza();
        foreach($orders as $orderItem)
        {
            $pizzaItem = $pizza->find($orderItem['id']);
            $order->pizzas()->attach($pizzaItem,['quantity' => $orderItem['quantity']]);
        }

      



    }
}
