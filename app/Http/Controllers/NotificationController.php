<?php


namespace App\Http\Controllers;
use App\Notification;
use App\Offre;
use App\User;
use DB;
use Auth;



class NotificationController extends Controller
{
    public function index()
    {
        return view('candidats.template1')
       //  ->with('notifications',Notification::where('user_id',Auth::user()->id)->get())
        ->with('users',User::all())
        ->with('notifications',Notification::all())
        ->with('offres',Offre::all());
    }
    public function view()
    {
        return view('candidats.offres')
        ->with('notifications',Notification::all())
        ->with('offres',Offre::all())
        ->with('users',User::all());
        ;


    }
    public function accept($id)
    {
        //$user =  Notification::find($id);
        $offre = Notification::find($id);
        $offre ->update(['status' => 1]);
        //return $offre;
        return  redirect()->back();


    }
    public function list()
    {
        return view('recruteurs.liste-candidats')
        ->with('notifications',Notification::where('status',1)->get())
        ->with('offres',Offre::all())
        ->with('users',User::all());
    }
}