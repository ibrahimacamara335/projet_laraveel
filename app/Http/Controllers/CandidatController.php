<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function afficherCandidat()
    {
        return view("candidat.afficher");
    }

    public function ajouterCandidat()
    {
        return view("candidat.ajouter");
    }

    public function enregistrerCandidat(Request $request)
    {
        $candidat = new Candidat();
        $candidat->nom = $request->nom;
        $candidat->prenom = $request->prenom;
        $candidat->nom = $request->email;
        $candidat->nom = $request->age;
        $candidat->nom = $request->niveauEtude;
        $candidat->nom = $request->sexe;
        dd($candidat);
        $candidat->save();
        if ($candidat) {
            return redirect("/candidat/affiche");
        } else {
            echo "Enregistrement echouer";
        }
    }
}
