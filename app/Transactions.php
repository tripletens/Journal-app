<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = 'transactions';
    //Primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamps = true;
    // `user_id`, `email`, `amount`, `payment_method`, `reference`,
    protected $fillable = ['user_id','email','order_reference','amount','payment_method','reference'];
}
