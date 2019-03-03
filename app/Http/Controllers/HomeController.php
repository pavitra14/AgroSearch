<?php

namespace App\Http\Controllers;

use App;
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
    public function index(Request $request)
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
        if($request->ajax())
        {
            return view('home', $response)->render();
        }
        return view('home', $response);
    }

    public function set_locale($lang)
    {
        if(session()->has('locale'))
        {
            session()->forget('locale');
            session()->put('locale', $lang);
        } else {
            session()->put('locale', $lang);
        }
        return 'success';
    }
}
