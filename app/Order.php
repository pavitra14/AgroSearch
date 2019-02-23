<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'placed_for', 'placed_mode', 'payment_mode', 'payment_details'
    ];

    public function buyer_user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function listing()
    {
        return $this->belongsTo('App\Listing', 'listing_id', 'id');
    }
}
