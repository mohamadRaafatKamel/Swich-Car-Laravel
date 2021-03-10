<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;

class AddCarController extends Controller
{
    public function addcar()
    {
//    	return "add caaaaar";
    	// if(session('userId') == null)
    	// 	return redirect()->route('register');
    	 return view('front.addcar');
    }

    public function image(Request $request)
    {

    }

}
