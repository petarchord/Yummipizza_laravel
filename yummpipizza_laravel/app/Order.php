<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $guarder = [];
    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class)->withTimestamps()->withPivot(['quantity']);
    }
}
