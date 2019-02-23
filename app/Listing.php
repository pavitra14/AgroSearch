<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'listing_title', 'listing_type', 'listing_desc', 'listing_rate', 'listing_mode', 'listing_img'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    public function orders()
    {
        return $this->hasMany('App\Order', 'listing_id', 'id');
    }
}
