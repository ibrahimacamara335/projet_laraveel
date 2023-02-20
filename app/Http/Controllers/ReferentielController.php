<?php

namespace App\Http\Controllers;

use App\Models\Referentiel;
use App\Models\Type;
use Illuminate\Http\Request;
use League\CommonMark\Reference\Reference;

class ReferentielController extends Controller
{
    public function afficherReferentiel()
    {
        $listeReferentiels = Referentiel::all();
        return view('referentiel.afficher', compact('listeReferentiels'));
    }

    public function editer($id)
    {
        $listeType = Type::all();
        $referentiel = Referentiel::find($id);
        return view('referentiel/modifier', compact("referentiel", "listeType"));
    }
    public function update(Request $request, $id)
    {
        $referentiel = Referentiel::findOrFail($id);
        $referentiel->libelle = $request->libelle;
        $referentiel->validated = $request->validated;
        $referentiel->horaire = $request->horaire;
        $referentiel->type_id = $request->type_id;
        $referentiel->update();
        return redirect("/referntiel/affiche");
    }

    /*Recupere ici tous les types qui sont enregistrer dans la base de donnees et tu les retourne dans une variable
         que tu va nommer types*/


    public function ajouterReferentiel()
    {
        $listeType = Type::all();

        return view('referentiel/ajouter', compact('listeType'));
    }

    public function enregistrerReferentiel(Request $request)
    {
        $referentiel = new Referentiel();
        $referentiel->libelle = $request->libelle;
        $referentiel->validated = $request->validated;
        $referentiel->horaire = $request->horaire;
        $referentiel->type_id = $request->type_id;
        // dd($referentiel);
        $referentiel->save();
        if ($referentiel) {
            return redirect("/referntiel/affiche");
        } else {
            echo "Enregistrement echouer";
        }
    }
}
