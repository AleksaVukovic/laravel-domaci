<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();
        return response()->json($movies);
    }

    public function show($id){

        $movie = Movie::find($id);
        return response()->json($movie);
    }

    public function destroy($movie_id){

        $movie = Movie::find($movie_id);
        $movie->delete();
        return response()->json("Movie deleted");
    }

    function add(Request $req){

        $movie=new Movie();
        $movie->trajanje=$req->trajanje;
        $movie->naslov=$req->naslov;
        $movie->zanr=$req->zanr;
        $movie->cinema_id=$req->cinema_id;

        $result=$movie->save();

        if($result){

            //return  ["Result"=>"Data has been saved"];

            return response()->json([

                'movie'=>$movie,
            ]);
        }

        else{

            return  ["Result"=>"Data has not been saved"];

        }

    }
}
