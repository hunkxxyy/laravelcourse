<?php

namespace App\Http\Controllers;

use App\Maker;
use App\Vehicle;
use Illuminate\Http\Request;

use App\Http\Requests\CreateVehicleRequest;

class VehicleController extends Controller
{
    public function index(){
        $vehicle=Vehicle::all();
        return response()->json(['data'=>$vehicle],200);
    }
    public function show($serie){
        $vehicle=Vehicle::all()->find($serie);
        return response()->json(['data'=>$vehicle],200);
    }
    public function store(CreateVehicleRequest $request, $makerId){
       /* $maker=Maker::find($makerId);
        if (!$maker)
            return response()->json(['message'=>'Nincs ilyen maker']);

        $values=$request->all();
        $maker->vehicle()->create($values);
       return response()->json(['messages'=>'The viechle assocviated was crreted'],201);*/
        return 'sdsds';
    }
}
