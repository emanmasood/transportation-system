<?php

namespace App\Http\Controllers\Passenger;

use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{

    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest:web')->except('logout');
    }

    public function login()
    {

        return view('passenger.passengerlogin');
    }

    

    public function getregister()
    {
        return view('passenger.passengerregister');
    }
    protected function register(Request $request)
    {
         User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'mobile' => $request['mobile'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect('/home');
    }
    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/login');

    }
}
