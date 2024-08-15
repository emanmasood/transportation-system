<?php

namespace App\Http\Controllers\Driver;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\reservation;
use App\Models\Vehicle;

class DriverController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/driver';

    public function __construct()
    {
        $this->middleware('auth:driver');
    }

    public function dashboard()
    {
        return view('driver.Driv_info');
    }


    public function show() 
    {

           return view('driver.showregesterpassenger1');
    }
    
    public function show2(Request $request)
    {
    
         $reservation=DB::table('reservations')->select('vehicle_id','name_passenger','phone','numseat')
                                   ->where('vehicle_id',$request->get('Vehicle_id'))
                                   ->get(); 
                return view('driver.showregesterpassenger2')->with('reservations',$reservation);    
   

    }

    


     public function showw()
    {

        return view('driver.addvehicle');

    }


    public function create(Request $request)
    {

           $vehicle =new Vehicle([
                        'name_driver'=>$request->get('name_Driver')  ,            
                        'vehicle_id'=>$request->get('Vehicle_id')  ,
                        'vehicle_type' =>$request->get('Vehicle_type'),
                        'destination_city' =>$request->get('destination_city'),
                        'max_seats' =>$request->get('max_num_seats'),
                                ]);

            $vehicle->save();
            return redirect()
                     ->back()
                     ->with('success','SUCCESSFULL!!');

    }
    public function logout()
        {
            Auth::guard('driver')->logout();
            return redirect('/admin/login');

        }
}








