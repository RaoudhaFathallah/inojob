<?php

namespace App\Http\Controllers;

use App\Niveau_Langue;
use Illuminate\Http\Request;
use App\User;
use App\Langue;
use App\Niveau;
use DB;
use Auth;

class LangueController extends Controller
{
    public function index()
    {
        return view('candidats.langue')
        ->with('niveau_langues',Niveau_Langue::where('user_id',Auth::user()->id)->get())
        ->with('users',User::all())
        ->with('langues',Langue::all())
        ->with('niveaux',Niveau::all());
    }
    public function save(Request $request)
    {
        $langue = $request->langue;
        $niveau = $request->niveau ;

        Niveau_Langue::where('user_id',Auth::user()->id)->delete();

        foreach($request->niveau as $key => $item) {

            $datesave=[
                'langue_id' => $langue[$key] ,
                'niveau_id' => $niveau[$key] ,
                'user_id' => Auth::user()->id,
            ];

            Niveau_Langue::insert($datesave);
        }
        return  redirect()->back();
    }
}