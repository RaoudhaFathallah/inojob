<?php

namespace App\Http\Controllers;

use App\Competence;
use App\Parcours_Professionnel;
use App\Parcours_Academique;
use App\Score;
use Illuminate\Http\Request;
use App\User;
use App\Region;
use App\Domaine_activite;
use DB;
use Auth;

class CandidatController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('candidats.template1');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('candidats.inscription-candidat')->with('users',$user)
        ->with('regions',Region::all())
        ->with('domaine_activites',Domaine_activite::all());
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
        $data=[];

        if ($request->hasfile('image')){

            $file_extension1 = $request->image->extension();
            $file_name1 = md5(time()) . '.' . $file_extension1;
            $path = 'images';
            $request->image->move($path, $file_name1);
            // data base
            $data['image']="images/".$file_name1;
        }


        $user =  User::find($id);

        $user->image = $data['image'];
        $user->name = $request->name;
        $user->etat_civil = $request->etat_civil;
        $user->tel = $request->tel;
        $user->prenom = $request->prenom;
        $user->genre = $request->genre;
        $user->datenaissance = $request->datenaissance;
        $user->status = 2;
        $user->region_id = $request->region_id;
        $user->experience = $request->experience;
        $user->type_emploi = $request->type_emploi;
        $user->poste = $request->poste;
        $user->domaine_activite_id = $request->domaine_activite_id;
        $user->salaire = $request->salaire;
        $user->nb_experience = $request->nb_experience;
        $user->save();
        return  redirect('candidat/professionnel/')->with('success', 'Project aangepast');
    }
    public static function profil()
    {
        $poste = '';
       // $etablissement='';
      //  $competence = '';
        $intitule = '';
       // $diplome = '';
        $secteur = '';
        $niveau_etude = '';
        $date = 0;

        $academiques = Parcours_Academique::where('user_id',Auth::user()->id)->get();
        $competences = User::where('id',Auth::user()->id)->get();
        $professionnels = Parcours_Professionnel::where('user_id',Auth::user()->id)->get();

          foreach($professionnels as $professionnel) {
              //la difference entre deux dates

              $d1 = strtotime($professionnel->date_debut);
              $d2 = strtotime($professionnel->date_fin);
              $totalSecondsDiff = abs($d2-$d1);
              $totalDaysDiff = $totalSecondsDiff/60/60/24;

             $poste.=$professionnel->poste_id .' ';
             $intitule.=$professionnel->nom_entreprise .' ';
             $secteur.=$professionnel->domaine_activite_id .' ';
             $date=$date+$totalDaysDiff;

          }
          foreach($academiques as $academique)
          {
            //  $etablissement.=$academique->etablissement_id .' ';
             // $diplome.=$academique->diplome_id .' ';
              $niveau_etude.=$academique->niveau_etude .' ';
          }
          foreach($competences as $competencee)
          {
              $competence.=$competencee->competences .' ';
          }
          $data=[
              'poste'=>$poste,
             // 'etablissement'=>$etablissement,
             // 'competence'=>$competence,
              'intitule'=>$intitule,
             // 'diplome'=>$diplome,
              'secteur'=>$secteur,
              'niveau_etude'=>$niveau_etude,
              'nb_jours'=>$date

          ];
          $count= Score::where('user_id',Auth::user()->id)->count();
        if ($count>0)  {
            Score::where('user_id',Auth::user()->id)->update($data);

        } else{
            $data['user_id']=Auth::user()->id;
            Score::insert($data);
        }

          return  redirect()->back();

    }
}
