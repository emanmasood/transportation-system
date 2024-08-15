<?php

namespace App\Http\Controllers\Passenger;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\reservation;
class PassengerController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function dashboard()
    {
        return view('Re');
    }


    
    // public function show(Request $request)
    // {
    //     $d=request()->get('number');
    //     $reservation = DB::table('reservations')
    //                      ->select('vehicle_id','numseat')
    //                      ->where('vehicle_id',$request->get('number'))
    //                      ->get();


    //     return view('list')->with('reservations',$reservation);

    // }


}
