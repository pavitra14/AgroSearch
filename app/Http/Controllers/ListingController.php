<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Listing;
use App\User; 
use Validator;



class ListingController extends Controller
{
    public $successStatus = 200;

    public function get_listings()
    {
        $user = Auth::user();
        $listings = $user->listings()->get();
        return response()->json(['success' => $listings], $this->successStatus); 
    }

    public function get_all_listings()
    {
        $user = Auth::user();
        $listings = Listing::all();
        return response()->json(['success' => $listings], $this->successStatus);
    }

    public function upload_listing(Request $request)
    {
        $user = Auth::user();
        $validator = Validator::make($request->all(), [ 
            'listing_title' => 'required', 
            'listing_type' => 'required|integer', 
            'listing_desc' => 'required', 
            'listing_rate' => 'required',
            'listing_mode' => 'required',
            'listing_img' => 'nullable',
        ]);
        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
        $input = $request->all();
        $listing = $user->listings()->create($input);
        $success['status'] = "Done";
        $success['listing_details'] = $listing;
        return response()->json(['success' => $success], $this->successStatus);
    }
}
