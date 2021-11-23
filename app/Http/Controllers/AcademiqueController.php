<?php

namespace App\Http\Controllers;

use App\Parcours_Academique;
use Illuminate\Http\Request;
use App\User;
use App\Domaine_activite;
use App\Diplome;
use App\Poste;
use DB;
use Auth;
use App\Http\Controllers\CandidatController;

class AcademiqueController extends Controller
{
    public function index()
    {
        return view('candidats.academique')
        ->with('academiques',Parcours_Academique::where('user_id',Auth::user()->id)->get())
        ->with('users',User::all())
        ->with('domaine_activites',Domaine_activite::all())
        ->with('diplomes',Diplome::all())
        ->with('postes',Poste::all());
    }
    public function save(Request $request)
    {
        $date_debut = $request->date_debut ;
        $date_fin = $request->date_fin ;
        $niveau_etude = $request->niveau_etude ;
        $diplome= $request->diplome;
        $etablissement = $request->etablissement; 
        $specialite = $request->specialite ;

        Parcours_Academique::where('user_id',Auth::user()->id)->delete();

        foreach($request->specialite as $key => $item) {
            $datesave=[
                'date_debut' => $date_debut[$key]  ,
                'date_fin' => $date_fin[$key],
                'niveau_etude' => $niveau_etude[$key] ,
                'etablissement_id' => $etablissement[$key] ,
                'diplome_id' => $diplome[$key]  ,
                'specialite_id' => $specialite[$key]  ,
                'user_id' => Auth::user()->id  ,
            ];

            Parcours_Academique::insert($datesave);
        }
        CandidatController::profil();

        return  redirect()->back();
    }

}
