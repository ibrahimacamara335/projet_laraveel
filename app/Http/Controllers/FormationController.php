<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\Referentiel;
use Illuminate\Http\Request;

class FormationController extends Controller
{

    public function afficherFormation()
    {
        $listeFormations = Formation::all();
        return view('formation.afficher', compact('listeFormations'));
    }


    public function ajouterFormation()
    {
        $listeReferentiel = Referentiel::all();

        return view('formation/ajouter', compact('listeReferentiel'));
    }


    public function enregistrerFormation(Request $request)
    {
        $formation = new Formation();
        $formation->nom = $request->nom;
        $formation->duree = $request->duree;
        $formation->description = $request->description;
        $formation->isStasted = $request->isStasted;
        $formation->date_debut = $request->date_debut;
        $formation->date_fin = $request->date_fin;
        $formation->referentiel_id = $request->referentiel_id;
        // dd($formation);
        $formation->save();
        if ($formation) {
            return redirect("/formation/afficher");
        } else {
            echo "Enregistrement echouer";
        }
    }
}
