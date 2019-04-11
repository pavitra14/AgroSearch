<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        $listing_img = $request->file('listing_img_file')->store('public');
        $listing_img = \str_replace("public","storage",$listing_img);
        $input = $request->all();
        $input['listing_img'] = $listing_img;        
        $input['listing_date_from'] = str_replace("/","-",$input['listing_date_from-x']);
        $input['listing_date_to'] = str_replace("/","-",$input['listing_date_to-x']);
        $user = Auth::user();
        $listing = $user->listings()->create($input);
        $success['status'] = "Done";
        $success['listing_details'] = $listing;
        return response()->json(['success' => $success], $this->successStatus);
    }

    public function web_details($id)
    {
        $listing = Listing::where('id',$id)->firstOrFail();
        $listing_user = $listing->user()->firstOrFail();
        $response = array(
            'listing'=>$listing,
            'listing_user'=>$listing_user
        );
        DB::table('listings')->where('id',$id)->increment('views');
        return view('listing_details', $response);
    }
    public function add_listing(Request $request)
    {
        $listing_img = $request->file('listing_img_file')->store('public');
        $listing_img = \str_replace("public","storage",$listing_img);
        $input = $request->all();
        $input['listing_img'] = $listing_img;        
        $input['listing_date_from'] = str_replace("/","-",$input['listing_date_from-x']);
        $input['listing_date_to'] = str_replace("/","-",$input['listing_date_to-x']);
        $user = Auth::user();
        $listing = $user->listings()->create($input);
        session()->put('success',"Listing Uploaded");
        return redirect(route('dashboard'));
    }

    public function get_views($id)
    {
        return Auth::user()->listings()->where('id', $id)->firstOrFail()->views;
    }

    public function show_my_ads(){
        $user = Auth::user();
        $allads = $user->listings()->paginate(10);
        
        $response = [
            'user' => $user,
            'all' => $allads,
        ];
        return view('myads', $response);
    }

    public function edit_listing_show($id)
    {
        $user = Auth::user();
        $listing = $user->listings()->where('id', $id)->firstOrFail();
        $response = [
            'user' => $user,
            'listing' => $listing
        ];
        return view('edit_listing', $response);   
    }

    public function edit_listing($id, Request $request)
    {
        $listing = Auth::user()->listings()->where('id',$id)->firstOrFail();
        $input = $request->all();
        $listing->listing_title = $input['listing_title'];
        $listing->listing_desc = $input['listing_desc'];
        $listing->listing_rate = $input['listing_rate'];
        $listing->listing_mode = $input['listing_mode'];
        if($request->filled('listing_date_from-x'))
        {
            $listing->listing_date_from = date('Y-m-d H:i:s', strtotime($input['listing_date_from-x']));   
        }
        if($request->filled('listing_date_to-x'))
        {
            $listing->listing_date_to = date('Y-m-d H:i:s', strtotime($input['listing_date_to-x']));
        }
        if($request->hasFile('listing_img_file'))
        {
            $listing_img = $request->file('listing_img_file')->store('public');
            $listing_img = \str_replace("public","storage",$listing_img);
            $listing->listing_img = $listing_img;
        }
        $listing->listing_sell_mode = $input['listing_sell_mode'];
        $listing->listing_display_mode = $input['listing_display_mode'];
        $listing->save();
        session()->put('info','Listing saved');
        return redirect(route('myads'));
    }

    public function delete_listing($id)
    {
        $listing = Auth::user()->listings()->where('id',$id)->firstOrFail();
        $listing->delete();
        session()->put('info','Listing deleted');
        return redirect(route('myads'));
    }

    public function view_all_featured()
    {
        $listings = Listing::where('listing_display_mode', '2')->paginate(20);
        $response = [
            'Featured' => $listings,
            'mode' => 'Featured'
        ];
        return view('view_all',$response);
    }
    public function view_all_latest()
    {
        $listings = Listing::where('listing_status', '1')->orderBy('created_at','desc')->paginate(20);
        $response = [
            'Latest' => $listings,
            'mode' => 'Latest'
        ];
        return view('view_all',$response);
    }
    public function search(Request $request)
    {
        $slug = '';
        $location = '';
        $category = '';
        $id = '';
        if($request->has('slug'))
        {
            $slug = $request->query('slug');
        }
        if($request->has('location'))
        {
            $location = $request->query('location');
        }
        if($request->has('category'))
        {
            $id = $request->query('category');
            $category = category($request->query('category'));
        }
        
        $search = Listing::where([
            ['listing_type','LIKE','%'.$id.'%']
        ])->search($slug.' '.$location.' '.$category)->paginate(20);
        $response = [
            'search' => $search,
            'mode' => $slug.' '.$location.' '.$category
        ];
        return view('search',$response);
    }
    public function cat_search($id)
    {
        $category = category($id);
        $search = Listing::where('listing_type',$id)->paginate(20);
        $response = [
            'search' => $search,
            'mode' => $category
        ];
        return view('cat',$response);
    }
}