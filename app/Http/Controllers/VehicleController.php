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
}
