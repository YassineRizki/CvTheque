<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cv;
use App\Http\Requests\CvRequest;

class CvController extends Controller
{
    
    //lister les cvs
    
    //afficher le formulaire de createion
    public function create(){

    	return view('cv\create');
    }


    public function index(){
        $listcv = Cv::all();

        return view('cv\index' , ['cvs' => $listcv]);
    }

    //enregistrer un cv
    public function store(CvRequest $request){
        

        $cv = new Cv();
        $cv->titre = $request->input('title');
        $cv->présentation = $request->input('presentation');
        $cv->save();

       return redirect('cvss');

    }


    //modifer un cv
    public function update(Cvrequest $request , $id){
 
   $cv = Cv::find($id);
   $cv->titre = $request->input('title');
   $cv ->présentation = $request->input('presentation');
   $cv->save();

   return redirect('cvss');

    	
    }

    public function edit($id){

        $cv = Cv::find($id);

        return view('cv.update',['Cvv' => $cv] );
    	
    }

    public function destroy(request $request , $id){

     $cv=Cv::find($id);
     $cv->DELETE();
     return redirect('cvss');
    	
    }


}
