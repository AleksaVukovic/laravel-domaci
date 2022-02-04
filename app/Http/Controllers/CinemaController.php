<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    function add(Request $req){

        $cinema=new Cinema;
        $cinema->naziv=$req->naziv;
        $cinema->adresa=$req->adresa;
        $result=$cinema->save();

        if($result){

            //return  ["Result"=>"Data has been saved"];

            return response()->json([

                'cinema'=>$cinema,
            ]);
        }

        else{

            return  ["Result"=>"Data has not been saved"];

        }

    }


    public function index(){

        $cinemas = Cinema::all();
        return response()->json($cinemas);
    }

    public function show($id){

        $cinema = Cinema::find($id);
        return response()->json($cinema);
    }

    public function destroy($cinema_id)
    {
        $cinema = Cinema::find($cinema_id);
        $cinema->delete();
        return response()->json("Cinema deleted");
    }
}
