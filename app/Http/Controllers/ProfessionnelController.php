<?php

namespace App\Http\Controllers;

use App\Parcours_Professionnel;
use Illuminate\Http\Request;
use App\User;
use App\Domaine_activite;
use App\Poste;
use DB;
use Auth;
use App\Http\Controllers\CandidatController;

class ProfessionnelController extends Controller
{
    public function index()
    {
        return view('candidats.professionnel')
         ->with('professionnels',Parcours_Professionnel::where('user_id',Auth::user()->id)->get())
        ->with('users',User::all())
        ->with('domaine_activites',Domaine_activite::all())
        ->with('postes',Poste::all());
    }

    public function save(Request $request)
    {

        $entreprise = $request->entreprise;
        $description = $request->description ;
        $date_debut = $request->date_debut ;
        $date_fin = $request->date_fin ;
        $poste = $request->poste ;
        $domaine_activite_id = $request->domaine_activite_id;
        //return $entreprise->all();

       Parcours_Professionnel::where('user_id',Auth::user()->id)->delete();
        foreach($request->entreprise as $key => $item) {
            $datesave = [
                'nom_entreprise' => $entreprise[$key],
                'date_debut' => $date_debut[$key],
                'date_fin' => $date_fin[$key],
                'user_id' => Auth::user()->id,
                'description' => $description[$key],
                'domaine_activite_id' => $domaine_activite_id[$key],
                'poste_id' => $poste[$key],
            ];

            Parcours_Professionnel::insert($datesave);
        }
        CandidatController::profil();
        return  redirect()->back();
    }
}
