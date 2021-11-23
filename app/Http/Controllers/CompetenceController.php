<?php

namespace App\Http\Controllers;

use App\Langue;
use App\Niveau;
use App\Niveau_Langue;
use Illuminate\Http\Request;
use App\Competence;
use App\User;
use DB;
use Auth;
use function Couchbase\defaultDecoder;

class CompetenceController extends Controller
{

    public function index()
    {
        return view('candidats.competence')
            ->with(
                array(
                    'users'=>User::all(),
                    "competences"=>Competence::all()
                )
            )
        ->with('niveau_langues',Niveau_Langue::where('user_id',Auth::user()->id)->get())
        ->with('users',User::all())
        ->with('langues',Langue::all())
        ->with('niveaux',Niveau::all());
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $search_text = $request->get('query');
        $student_data = Competence::where('name', 'LIKE', '%'. $search_text. '%')->get();
        return response()->json($student_data);
    }

    public function save(Request $request)
    {
             //return $request->all();
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

             $datas['competences'] =  implode(" " ,  $data);

             User::where("id", Auth::user()->id)->update($datas);
        return  redirect()->back();
    }
}
