<?php

namespace App\Http\Controllers;

use App\Competence;
use App\Diplome;
use App\Domaine_activite;
use App\Etablissement;
use App\Langue;
use App\Niveau;
use App\Niveau_Langue;
use App\Parcours_Academique;
use App\Parcours_Professionnel;
use App\Poste;
use App\Region;
use App\User;
use PDF;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('candidats.cv')
                ->with('users',User::all())
                ->with('professionnels',Parcours_Professionnel::all())
                ->with('domaine_activites',Domaine_activite::all())
                ->with('postes',Poste::all())
                ->with('regions',Region::all())
                ->with('diplomes',Diplome::all())
                ->with('etablissements',Etablissement::all())
                ->with('competences',Competence::all())
                ->with('academiques',Parcours_Academique::all())
                ->with('langues',Langue::all())
                ->with('niveaux',Niveau::all())
                ->with('niveau_langues',Niveau_Langue::all());
        ;
    }
    public function export()
    {
        $users=User::all();
        $professionnels=Parcours_Professionnel::all();
        $domaine_activites=Domaine_activite::all();
        $postes=Poste::all();
        $regions=Region::all();
        $diplomes=Diplome::all();
        $etablissements=Etablissement::all();
        $competences=Competence::all();
        $academiques=Parcours_Academique::all();
        $langues=Langue::all();
        $niveaux=Niveau::all();
        $niveau_langues=Niveau_Langue::all();
        set_time_limit(600); //also have tried setting it to 60 and 120 earlier

        view()->share('users',$users);
        view()->share('professionnels',$professionnels);
        view()->share('domaine_activites',$domaine_activites);
        view()->share('postes',$postes);
        view()->share('regions',$regions);
        view()->share('diplomes',$diplomes);
        view()->share('etablissements',$etablissements);
        view()->share('competences',$competences);
        view()->share('academiques',$academiques);
        view()->share('langues',$langues);
        view()->share('niveaux',$niveaux);
        view()->share('niveau_langues',$niveau_langues);
        $pdf = PDF::loadView('candidats.pdf',$users);
        /*$pdf = PDF::loadView('candidats.pdf',$professionnels);
        $pdf = PDF::loadView('candidats.pdf',$domaine_activites);
        $pdf = PDF::loadView('candidats.pdf',$postes);
        $pdf = PDF::loadView('candidats.pdf',$regions);
        $pdf = PDF::loadView('candidats.pdf',$diplomes);
        $pdf = PDF::loadView('candidats.pdf',$etablissements);
        $pdf = PDF::loadView('candidats.pdf',$competences);
        $pdf = PDF::loadView('candidats.pdf',$academiques);
        $pdf = PDF::loadView('candidats.pdf',$langues);
        $pdf = PDF::loadView('candidats.pdf',$niveaux);
        $pdf = PDF::loadView('candidats.pdf',$niveau_langues);*/
        return $pdf->download("pdf_file.pdf");
    }

}
