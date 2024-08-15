<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','checktype');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('check');
    }

    public function checktype(Request $request)
    {

        $type = $request->input('user');
        if($type == 'admin')
            return redirect('/admin/login');
        if($type == 'driver')
            return redirect('/driver/login');
        if($type == 'passenger')
            return redirect('/login');
    }
}
