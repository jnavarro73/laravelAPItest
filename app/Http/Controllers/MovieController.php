<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
   
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $movie = Movie::where('title', $request->title)->first();
        if(!empty($movie)) return "is there previously ".$movie->title;
    
        $oFilm = new Movie;
        $oFilm->title = $request->title;
        $oFilm->year = $request->releaseYear;
        $oFilm->save();

  
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {   
        // // Validate if is not there 
        $movie = Movie::where('title', $request->title)->first();
         if(empty($movie)) return "is not there previously ".$request->title;
        //$movie = Movie::destroy($request->title);
         Movie::where('title',$request->title)->delete();
        return $movie. " destroy ";

    }
}
