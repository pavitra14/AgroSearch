<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use function GuzzleHttp\json_encode;
class HomeController extends Controller
{
    /**
     * Show the application store.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_count = Listing::count();
        $featured = Listing::where([
            ['listing_display_mode','=', '2'],
            ['listing_status', '=', '1']
        ])->limit(25)->get();
        $latest = Listing::where([
            ['listing_status', '=', '1']
        ])->orderBy('created_at','desc')->limit(10)->get();
        $response = array(
            'total_count' => $total_count,
            'featured_listings' => $featured,
            'latest_listings' => $latest
        );
        return view('home', $response);
    }
}
