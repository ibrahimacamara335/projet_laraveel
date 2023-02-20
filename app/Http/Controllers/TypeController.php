<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    /**Cette fontion permet d'afficher le formulaire */
    public function afficherFormulaire()
    {
        return view('type.ajouter');
    }
    public function typeListe()
    {
        $types = Type::all();
        return view('type/liste', compact('types'));
    }

    public function enregistrerType(Request $request)
    {
        $type = new Type();
        $type->libelle = $request->libelle;
        // dd($type);
        $type->save();
        if ($type) {
            return redirect("/type/list");
        } else {
            echo "Enregistrement echouer";
        }
    }
    public function supprimer($id)
    {
        $type = Type::find($id);
        $type->delete();
        return redirect("/type/list");
    }
}
