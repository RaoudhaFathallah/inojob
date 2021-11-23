<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poste;
use DB;
class PosteController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('candidats.profil1');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $search_text = $request->get('query');
        $student_data = Poste::where('name', 'LIKE', '%'. $search_text. '%')->get();
        return response()->json($student_data);
    }
}