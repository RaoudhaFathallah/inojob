<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etablissement;

class EtablissementController extends Controller
{
    public function autocomplete(Request $request)
    {
        $search_text = $request->get('query');
        $student_data = Etablissement::where('name', 'LIKE', '%'. $search_text. '%')->get();
        return response()->json($student_data);
    }
}
