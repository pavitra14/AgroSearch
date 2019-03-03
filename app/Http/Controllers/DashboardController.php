<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class DashboardController extends Controller
{
    
    public function index()
    {
        $user = Auth::user();
        $response = array(
            'user' => $user
        );
        return view('dashboard', $response);
    }
    public function post_listing()
    {
        $user = Auth::user();
        $response = array(
            'user' => $user
        );
        return view('post_listing', $response);
    }
}
