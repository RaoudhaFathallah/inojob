<?php

namespace App\Http\Controllers;

use App\Document;
use App\Parcours_Academique;
use App\User;
use Illuminate\Http\Request;
use DB;
use Auth;

class DocumentController extends Controller
{
    public function index()
    {
        return view('candidats.document')
            ->with('documents',Document::where('user_id',Auth::user()->id)->first())
            ->with('users',User::all());
    }
    public function save(Request $request)
    {
        $data=[];
        // data base
        $data['user_id']=Auth::user()->id;
        if ($request->hasfile('cv')){
            $cv = $request->file('cv');
            $file_extension = $cv->extension();
            $file_name =  md5(time()). '.' . $file_extension;
            $path = 'images';
            $request->cv->move($path, $file_name);
            // data base
            $data['cv']="images/".$file_name;
        }
        if ($request->hasfile('lettre')){

            $file_extension1 = $request->lettre->extension();
            $file_name1 = md5(time()) . '.' . $file_extension1;
            $path = 'images';
            $request->lettre->move($path, $file_name1);
            // data base
            $data['lettre']="images/".$file_name1;
        }

        $document=Document::where("user_id",Auth::user()->id)->first();
        if ($document->id){
            Document::where('id',$document->id)->update($data);
        }else{

             Document::insert($data);


        }
        //return  $data;

return  redirect()->back();
    }
}
