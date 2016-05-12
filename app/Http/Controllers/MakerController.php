<?php

namespace App\Http\Controllers;

use App\Maker;
use Illuminate\Http\Request;


use App\Http\Requests\CreateMakerRequest;

class MakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* a maker model össze eleme belekerül*/
        $makers=Maker::all();
        /*jasonba visszaküldjük, találat esetén 200-ok koddal térjen vissza*/
       //return response()->json($makers,200);
        /*ezeket e data változoban tároljuk*/
        return response()->json(['data'=>$makers],200);
    }



    /*használom ellenőrzéshez a CreateMakerRequest -et*/
    //public function store(Request $request)
    public function store(CreateMakerRequest $request)

    {
        $values=$request->only(['name','phone']);
       Maker::create($values);
        return response()->json(['messge'=>'Sikeres post'],201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*itt megadhatunk egy hiba üzenetet ha nincs találat, az elv ua. ltrehozzuk az array
        és jsonná alakítjuk, majd hozzáfüzzük a 404 http error codot*
        404 not foundot jelen
        */
        $maker=Maker::find($id);
        if (!$maker) return response()->json(['message'=>'nics ilyen','errorcode'=>'404'],404);
        return response()->json(['data'=>$maker],200);
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
