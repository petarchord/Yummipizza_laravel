<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function store()
    {
        $data = request()->validate([
            'name' => ['required', 'string'],
            'address' => ['required','string'],
            'phone' => ['required','integer'],
            'bill' => ['required']
        ]);

        $order = new \App\Order();
        $order->client_name = $data['name'];
        $order->client_address = $data['address'];
        $order->client_phone = $data['phone'];
        $order->bill = $data['bill'];
        $order->save();

        // \App\Order::create([
        //     'client_name' => $data['name'],
        //     'client_address' => $data['address'],
        //     'client_phone' => $data['phone'],
        //     'bill' => $data['bill']

        // ]);

       // return request()->all();



    }
}
