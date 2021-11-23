<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Region;
use App\Domaine_activite;
use App\Parcours_Professionnel;
use Auth;

class RecruteurController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('recruteurs.template1');
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
        return view('recruteurs.inscription-recruteur')->with('users',$user)
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
       // $user->ville_id = $request->ville_id;
        $user->entreprise = $request->entreprise;
        $user->rc = $request->rc;
        $user->siteweb = $request->siteweb;
        $user->description = $request->description;
        $user->domaine_activite_id = $request->domaine_activite_id;

        $user->save();
        return  redirect('/recruteur/home/'.Auth::user()->id)->with('success', 'Project angepast');
    }

}
