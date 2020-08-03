<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {

        return \App\Pizza::all();
        //make db query and send data back to client
    }
}
