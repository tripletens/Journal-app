<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    //Primary key
    public $primarykey = 'id';
    //timestamps
    public $timestamps = true;

    protected $fillable =
                ['user_id',
                    'journal_id',
                    'reference',
                    'title',
                    'description',
                    'link',
                    'image',
                    'status',
                    'price',
                    'transaction_id'
                ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
