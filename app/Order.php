<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
  public function orderproducts()
  {
    return $this->hasMany('App\Orderproduct','order_id');
  }
}
