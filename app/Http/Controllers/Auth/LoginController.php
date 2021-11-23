<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    /*public function redirectTo()
    {
        switch(Auth::user()->status){
           
            case 0:
                    $this->redirectTo = '/email/verify';
                return $this->redirectTo;
                break;
            case 1:
                if (Auth::user()->role_id == 1){
                    return $this->redirectTo = '/recruteur/step1/'.Auth::user()->id;
                }else if (Auth::user()->role_id == 2) {
                    return $this->redirectTo = '/candidat/step1/'.Auth::user()->id;
                } 
                break;
            case 2:
                if (Auth::user()->role_id == 1){
                    return $this->redirectTo = '/recruteur/step1/'.Auth::user()->id;
                }else if (Auth::user()->role_id == 2) {
                    return $this->redirectTo = '/candidat/step1/'.Auth::user()->id;
                } 
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
         
        // return $next($request);
    } */
 public function redirectTo()
    {
        switch(Auth::user()->role_id){
           
            case 1:
                if (Auth::user()->status == 1){
                    return $this->redirectTo = '/recruteur/step1/'.Auth::user()->id;
                } else if (Auth::user()->status == 2) {
                    return $this->redirectTo = '/recruteur/publier_offre';
                } else if (Auth::user()->status == 0){
                    return $this->redirectTo = '/email/verify';
                } 
                break;
            case 2:
                if (Auth::user()->status == 1){
                    return $this->redirectTo = '/candidat/step1/'.Auth::user()->id;
                } else if (Auth::user()->status == 2) {
                    return $this->redirectTo = '/candidat/professionnel';
                } else if (Auth::user()->status == 0){
                    return $this->redirectTo = '/email/verify';
                } 
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
         
        // return $next($request);
    } 


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
}
