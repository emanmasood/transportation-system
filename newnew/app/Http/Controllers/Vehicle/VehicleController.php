<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\reservation;
use App\Models\Vehicle;


class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle = DB::table('vehicles')
                         ->select('vehicle_id','destination_city')
                         ->get();

        return view('Vehicle.seat_reservation')
                    ->with('vehicles', $vehicle);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


        $this->validate($request,[
                    'vehicle_id' =>'required',
                    'name_passenger'=>'required',
                    'phone'=>'required',
                    'number_seat' =>'required',
                                 ]);
              
        $d = $request->get('number_seat');


        $did=DB::table('vehicles')->select('number_reserv_seat')
                                   ->where('vehicle_id',$request->get('vehicle_id'))
                                   ->sum('number_reserv_seat');

        $summ=$did+$d;


        if( $summ<= 14){

            $reservation =new reservation([
                                        
                         
                        'vehicle_id' =>$request->get('vehicle_id'),
                        'name_passenger'=>$request->get('name_passenger')  ,
                        'phone'=>$request->get('phone')  ,
                        'numseat'=>$request->get('number_seat')  
                                         ]);

            $reservation->save();

              Vehicle::where('vehicle_id',$request->get('vehicle_id'))
                           ->update(array('number_reserv_seat' =>$summ));
            
             return redirect()->back()->with('success','successful!!');
            
                        }  
        elseif ($summ >14) {
             
             return redirect('/gotoseat')->with('error','can not seat Reserv');

                          }           

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
             return view('showregester');         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showw()
    {

         return view('showregester22'); 
    }
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
