<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialite;
 
class SpecialiteController extends Controller
{
    public function autocomplete(Request $request)
    {
        $search_text = $request->get('query');
        $student_data = Specialite::where('name', 'LIKE', '%'. $search_text. '%')->get();
        return response()->json($student_data);
    }
}
