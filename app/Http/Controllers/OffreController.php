<?php

namespace App\Http\Controllers;

use App\Parcours_Academique;
use App\Score;
use Illuminate\Http\Request;
use App\Offre;
use App\User;
use App\Region;
use App\Ville;
use App\Domaine_activite;
use App\Poste;
use App\Diplome;
use App\Etablissement;
use App\Competence;
use App\Notifications;
use App\Notification;
use DB;
use Auth;


class OffreController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('recruteurs.publier-offre');
    }
    public function create()
    {
        return view('recruteurs.publier-offre')->with('offres',$offre)
        ->with('users',User::all())
        ->with('regions',Region::all())
        ->with('domaine_activites',Domaine_activite::all())
        ->with('postes',Poste::all())
        ->with('diplomes',Diplome::all())
        ->with('etablissements',Etablissement::all())
        ->with('competences',Competence::all());

    }


    public function findVilleName($id){

        echo json_encode(DB::table('villes')->where('region_id', $id)->get());

	}


    public function store(Request $request)
    {
//return $request->all();
        $intitule = $request->intitule;
        $region = $request->region;
        $type_contrat = $request->type_contrat;
        $ville = $request->ville;
        $nb_experience = $request->nb_experience*365;
        $domaine_activite = $request->domaine_activite_id;
        $genre = $request->genre;
        $age = $request->age;
        $secteur = $request->secteur;
        $poste = $request->poste_id;
        $diplome = $request->diplome_id;
        $etablissement = $request->etablissement_id;
        $niveau_etude = $request->niveau_etude;
        $competence = $request->competence;
        $id = $request->id;
        $langue = $request->langue;



        $data = [];
        foreach ($request->competence as $key =>$cometence){
            if (is_numeric($cometence)){
                // compétence déja exist
                // associer l id de compétence a le condidat
                $data[$key]=Competence::find($cometence)->name;
            }else{
                // nouvelle compétence
                //ajouter une nouvelle compétence
                Competence::create(["name"=>$cometence]);
                // associer l id de compétence a le condidat
                $data[$key]=$cometence;
            }
        }
        $datas['competence'] =  implode(" " ,  $data);



       /*  $comp=" ";
         for($x = 0 ; $x < count($request->competence) ;$x++){
            $comp1= Competence::find($request->competence[$x]);
             $comp .= $comp1->name.' ';
         }*/
       //return $comp;
       //return count($request->competence);
         $data1 = [];
         foreach ($request->etablissement as $key =>$etablissement){
             if (is_numeric($etablissement)){
                 $data1[$key]=Etablissement::find($etablissement)->name;
             }else{
                 Etablissement::create(["name"=>$etablissement]);
                 $data1[$key]=$etablissement;
             }

         }
         $datas1['etablissement'] =  implode(" " ,  $data1);

         $data2 = [];
         foreach ($request->diplome as $key =>$diplome){
             if (is_numeric($diplome)){
                 $data2[$key]=Diplome::find($diplome)->nom;
             }else{
                 Diplome::create(["nom"=>$diplome]);
                 $data2[$key]=$diplome;
             }
         }
         /*$diplome="";
         for($x = 0 ; $x < count($request->diplome) ;$x++){
             $diplome1= Diplome::find($request->diplome[$x]);
             $diplome .= $diplome1->nom.' ';
         }*/
        $datas2['diplome'] =  implode(" " ,  $data2);

       $data3 = [];
       foreach ($request->langue as $key =>$langue){
           if (is_numeric($langue)){
               $data3[$key]=Langue::find($langue)->nom;
           }else{
               Langue::create(["nom"=>$langue]);
               $data3[$key]=$langue;
           }

       }
       $datas3['langue'] =  implode(" " ,  $data3);
      
            $datesave = [
                'intitule' => $intitule,
                'region_id' => $region,
                'type_contrat' => $type_contrat,
                'ville_id' => $ville,
                'nb_experience' => $nb_experience,
                'domaine_activite_id' => $domaine_activite,
                'genre' => $genre,
                'age' => $age,
                'competence_id' =>  $comp,
                'etablissement_id' => $datas1['etablissement'],
                'diplome_id' => $datas2['diplome'],
                'secteur' => $secteur,
                'poste_id' => $poste,
                'niveau_etude' => $niveau_etude,
                'user_id' => Auth::user()->id,
            ];
           // echo json_encode(DB::table('offres')->insert($datesave));
                $offresave=DB::table('offres')->insertGetId($datesave);
                //return $offresave;
              //  return $datesave->id;

           //  $score= Score::query();
             $scores=Score::where('nb_jours','>',$nb_experience)

           
             ->join( 'score_competences','scores.user_id','score_competences.user_id')
             ->whereIn('score_competences.competence_id', $request->competence)
             ->join( 'score_etablissements','scores.user_id','score_etablissements.user_id')
             ->whereIn('score_etablissements.etablissement_id', $request->etablissement)
             ->join( 'score_diplomes','scores.user_id','score_diplomes.user_id')
             ->whereIn('score_diplomes.diplome_id', $request->diplome)
             ->join( 'score_langues','scores.user_id','score_langues.user_id')
             ->whereIn('score_langues.langue_id', $request->langue)
             ->where( 'poste','like', '%'.$intitule.'%')
             ->where( 'secteur','like', '%'.$secteur.'%')
             ->selectRaw('scores.user_id, count(distinct score_competences.competence_id) as numCompetences')
             ->groupBy('scores.user_id')
             ->orderBy('numCompetences', 'DESC')
             ->selectRaw('scores.user_id, count(distinct score_etablissements.etablissement_id) as numEtablissements')
             ->orderBy('numEtablissements', 'DESC')
             ->selectRaw('scores.user_id, count(distinct score_diplomes.diplome_id) as numDiplomes')
             ->orderBy('numDiplomes', 'DESC')
             ->selectRaw('scores.user_id, count(distinct score_langues.langue_id) as numLangues')
             ->orderBy('numLangues', 'DESC')
             ->inRandomOrder()
             ->limit(5)
             ->get();

                //return $scores;


            $dataset = [];
            foreach($scores as $score){
                $dataset = [
                    'user_id' =>$score->user_id,
                   // 'notifiable_id'=> Auth::user()->id,
                   // 'data' => null,
                    //'read_at' => '30/10/2021',
                    'offre_id' => $offresave,
                    //'type' => 'result',
                ];
               // Notification::insert($dataset);
                $user= Auth::user();
                $user->notify(new \App\Notifications\matchingNotification($dataset));
              //$user = User::get();
              //Notification::send($user,new \App\Notifications\matchingNotification($dataset));
            }
            return $dataset;
        
        return  redirect('/recruteur/historique_annonces');

    }

                public function findOffre()
                {
                    return view('recruteurs.historique-offre')
                        ->with('users',User::all())
                        ->with('offres',Offre::all());
                }
}
