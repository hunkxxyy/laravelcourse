<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

use App\Http\Requests;

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
}
