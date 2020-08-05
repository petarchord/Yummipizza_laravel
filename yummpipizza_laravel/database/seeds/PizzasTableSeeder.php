<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            [
                'name' => 'Capricoza',
                'image' => 'capricciosa.jpg',
                'price' => '12.50'
            ],
            [
                'name' => 'Margarita',
                'image' => 'margarita.jpg',
                'price' => '10.50'
            ],
            [
                'name' => 'Quatro Staggoni',
                'image' => 'quatro.jpg',
                'price' => '14'
            ],
            [
                'name' => 'Frutti di mare',
                'image' => 'frutidimare.jpg',
                'price' => '14'
            ],
            [
                'name' => 'Kalimero Pizza',
                'image' => 'kalimero.jpg',
                'price' => '12.50'
            ],
            [
                'name' => 'Chili Pizza',
                'image' => 'chili.jpg',
                'price' => '11'
            ],
            [
                'name' => 'Napolitana',
                'image' => 'napolitana.jpg',
                'price' => '12'
            ],
            [
                'name' => 'Tuna Pizza',
                'image' => 'tuna.jpg',
                'price' => '14.50'
            ]

        ]);
    }
}
