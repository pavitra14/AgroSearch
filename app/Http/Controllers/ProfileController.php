<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Listing;
use App\User; 

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $response = [
            'user' => $user
        ];
        return view('profile', $response);
    }

    public function update(Request $request)
    {
        $input = $request->all();
        $user = Auth::user();
        $user->email = $input['email'];
        $user->city = $input['city'];
        $user->state = $input['state'];
        $user->zipcode = $input['zipcode'];
        $user->save();
        session()->put('info','Profile Updated Successfully');
        return redirect(route('dashboard'));
    }
}
