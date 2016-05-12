<?php

namespace App\Http\Controllers;

use App\Maker;
use App\Vehicle;
use Illuminate\Http\Request;

use App\Http\Requests\CreateVehicleRequest;

class MakerVehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $maker=Maker::find($id);
        if (!$maker) return response()->json(['message'=>'nics ilyen','errorcode'=>'404'],404);
      /*  itt beolvassa a maker összes járművét miért?
        $maker->vehicles van a Maker modelben egy ilyen fügvény
             public function vehicles()
            {

                return $this->hasMany('App\Vehicle');
             }
        ez felelős a kapcslatért
        */

        return response()->json(['data'=>$maker->vehicles],200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateVehicleRequest $request, $makerId){
         $maker=Maker::find($makerId);
         if (!$maker)
             return response()->json(['message'=>'Nincs ilyen maker']);

         $values=$request->all();
         $maker->vehicles()->create($values);
        return response()->json(['messages'=>'The viechle assocviated was crreted'],201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $vehicleId)
    {
        $maker=Maker::find($id);
        if (!$maker) return response()->json(['message'=>'nics ilyen','errorcode'=>'404'],404);
        $vehicle=$maker->vehicles;

        return response()->json(['data'=>$vehicle],200);
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
