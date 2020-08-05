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
            'phone' => ['required','integer'],
            'bill' => ['required'],
            'pizzaIds' => ['required'],
            'pizzaQuantities' => ['required']
        ]);

        $order = new \App\Order();
        $order->client_name = $data['name'];
        $order->client_address = $data['address'];
        $order->client_phone = $data['phone'];
        $order->bill = $data['bill'];
        $order->save();

        $pizza = new \App\Pizza();
        $pizzas = $pizza->find($data['pizzaIds']);

        foreach($pizzas as $pizza)
        {
            $order->pizzas()->attach($pizza);
        }

        foreach($data['pizzaQuantities'] as $quantity)
        {
            $order->pivot->quantity = $quantity;

        }

        

        

        // \App\Order::create([
        //     'client_name' => $data['name'],
        //     'client_address' => $data['address'],
        //     'client_phone' => $data['phone'],
        //     'bill' => $data['bill']

        // ]);

       // return request()->all();



    }
}
