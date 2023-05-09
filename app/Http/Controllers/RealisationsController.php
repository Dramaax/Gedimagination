<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\realisations;
use App\Http\Requests\RealisationsRequest;

class RealisationsController extends Controller
{
    public function create()
    {
        return view('participation');
    }

    public function store(RealisationsRequest $request)
    {   
        $exist = false;
        $id = ENV('ID');
        $realisationsExist = realisations::all();
        
        foreach ($realisationsExist as $realisations) {
            if($realisations->id_utilisateur == $id)
                $exist = true;
        }
        if($exist == false){
            $realisations = new \App\Models\Realisations;
            $realisations->id_utilisateur = $id;
            $realisations->titre = $request->titre;
            $realisations->descriptif = $request->descriptif;
            $realisations->dateDebut = $request->dateDebut;
            $realisations->dateFin = $request->dateFin;
            $realisations->dateParticipation = date("Y-m-d");

            //Récupération de l'image
            if($request->file('photo')){
            $file= $request->file('photo');
            //Chemin d'accès a l'image
            $filename= 'www/gedimagination/public/image/'.$id.$file->getClientOriginalName();
            $file-> move(public_path('image'), $filename);
            $realisations['photo']=$filename;
            }
            
            $realisations->save();
            return view("traitement");
        }
        else {
            return view('a');
        }
        
    }

    public function verification()
    {
        $exist = false;
        $id = ENV('ID');
        $realisationsExist = realisations::all();
        
        foreach ($realisationsExist as $realisations) {
            if($realisations->id_utilisateur == $id)
                $exist = true;
        }
        if(!$exist){
            return view('participation');
        }
        else {
            return view('a');
        }

    }
}
