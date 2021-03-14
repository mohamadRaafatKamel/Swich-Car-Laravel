<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserAuthController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function check(Request $request)
    {
    	// try {
    		// Validate
    		$request->validate([
    			'phone'=>'required',
    			'password'=>'required',
    		]);

    		$user = User::select()->where('phone',$request->phone)->first();
    		if($user){
    			if (Hash::check($request->password,$user->password)) {
    				session(['LoggedUser' => $user->id]);
    				return redirect()->route('home');
    			}else{
    				return redirect()->route('login')->with(['error'=>'invaled password']);
    			}
    		}else{
    			return redirect()->route('login')->with(['error'=>'No account with this phone']);
    		}
        // }catch (\Exception $ex){
        //     return redirect()->route('login')->with(['error'=>'كود غير صحيح']);
        // }
    }

    public function register()
    {
    	return view('auth.register');
    }

    public function create(Request $request)
    {
    	// try {
	    	// Validate phone
	    	$request->validate([
	    		'phone'=>'required',//|unique:users
	    	]);

	    	// check if exist
	    	$user = User::select()->where('phone',$request->phone)->first();
	    	//print_r($user);die();
	    	if(!empty($user)){
	    		if($user->state == 0){
		    		// send sms code
		    		session(['newUserId' => $user->id]);
		    		$user->update(['verified_code'=>rand(1111,9999)]);
		    		return redirect()->route('auth.validcode');
		    	}else{
					return redirect()->route('register')->with(['error'=>'this phone is used']);
		    	}
	    	}else{
	    		// Create user by phone
		    	$user = new User;
		    	$user->verified_code = rand(1111,9999);
		    	$user->phone = $request->phone;
		    	$user->countrycode = $request->countrycode;
		    	$user->save();

		    	session(['newUserId' => $user->id]);
	    		return redirect()->route('auth.validcode');
	    	}
	    // }catch (\Exception $ex){
     //        return redirect()->route('register')->with(['error'=>'يوجد خطء حاول مره اخري']);
     //    }
    }

    public function validcode()
    {
    	if(session('newUserId') == null)
    		return redirect()->route('register');
    	$user = User::select()->find(session('newUserId'));
    	return view('auth.validcode',compact('user'));
    }

    public function validcodepost(Request $request)
    {
    	// try {
    		// Validate phone
    		$request->validate([
    			'code'=>'required',
    		]);
            // check code
    		$user = User::select()->find(session('newUserId'));
    		if ($user->verified_code == $request->code) {
    			$user->update(['state'=>'1']);
    			return redirect()->route('auth.info');
    		}
            return redirect()->route('auth.validcode')->with(['error'=>'كود غير صحيح']);
        // }catch (\Exception $ex){
        //     return redirect()->route('auth.validcode')->with(['error'=>'كود غير صحيح']);
        // }
    }

    public function info()
    {
    	if(session('newUserId') == null)
    		return redirect()->route('register');
    	return view('auth.info');
    }

    public function infopost(Request $request)
    {
    	// try {
    		// Validate
    		$request->validate([
    			'name'=>'required|min:4',
    			'password'=>'required|min:6|max:24',
    		]);
            // check code
    		$user = User::select()->find(session('newUserId'));
    		$user->update([
    			'name'=>$request->name,
    			'password'=>Hash::make($request->password),
    		]);
    		session(['LoggedUser' => session('newUserId')]);
    		session()->pull('newUserId');
    		return redirect()->route('addCar.image');

        // }catch (\Exception $ex){
        //     return redirect()->route('auth.info')->with(['error'=>'كود غير صحيح']);
        // }
    }

    public function logout()
    {
    	if(session()->has('LoggedUser')){
    		session()->pull('LoggedUser');
    		return redirect('login');
    	}
        return redirect()->route('home');
    }
}
