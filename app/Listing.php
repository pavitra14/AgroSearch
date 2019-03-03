<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Listing extends Model
{
    use SearchableTrait;
    protected $fillable = [
        'listing_title', 'listing_type', 'listing_desc', 'listing_rate', 'listing_mode', 'listing_img',
        'listing_sell_mode','listing_display_mode', 'listing_status', 'listing_date_from', 'listing_date_to', 'listing_category'
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
