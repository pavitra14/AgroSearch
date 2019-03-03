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
        /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'listings.listing_title' => 10,
            'listings.listing_desc' => 9,
            'users.city' => 10,
            'users.state' => 9,
            'users.zipcode' => 7  
        ],
        'joins' => [
            'users' => ['listings.user_id','users.id'],
        ],
    ];
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
    public function orders()
    {
        return $this->hasMany('App\Order', 'listing_id', 'id');
    }
}
