<?php

use App\Http\Controllers\CandidatController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ReferentielController;
use App\Http\Controllers\TypeController;
use App\Models\Referentiel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("accueil");
//Les routes pour le module Candidat

Route::get('/candidat/afficher', [CandidatController::class, "afficherCandidat"])->name("afficher-candidat");
Route::get('/candidat/ajouter', [CandidatController::class, "ajouterCandidat"])->name("ajouter-candidat");
Route::get('/candidat/enregistrer', [CandidatController::class, "enregistrerCandidat"])->name("enregistrer-candidat");


/*les routes pour le module type*/
Route::get('/type/list', [TypeController::class, "typeListe"])->name("type-liste");
Route::get('/type/ajouter', [TypeController::class, "afficherFormulaire"])->name("afficher-formulaire");
Route::post('/type/enregister', [TypeController::class, "enregistrerType"])->name("enregister-type");
Route::get('/type/supprimer/{id}', [TypeController::class, "supprimer"])->name('supprimer-type');
/*fin routes pour le module type*/


//Les routes pour le module Referentiel

Route::get('/referntiel/affiche', [ReferentielController::class, "afficherReferentiel"])->name("afficher-referentiel");
Route::get('/referentiel/ajouter', [ReferentielController::class, "ajouterReferentiel"])->name("afficher-formulaire-referentiel");
Route::post('/referentiel/enregister', [ReferentielController::class, "enregistrerReferentiel"])->name("enregister-referentiel");
Route::get('/type/{id}/edit', [ReferentielController::class, "editer"]);
Route::patch('/referentiel/{id}', [ReferentielController::class, "update"]);


//Les routes pour le module Formation

Route::get('/formation/afficher', [FormationController::class, "afficherFormation"])->name("afficher.formation");
Route::get('/formation/ajouter', [FormationController::class, "ajouterFormation"])->name("ajouter.formation");
Route::post('/formation/enregister', [FormationController::class, "enregistrerFormation"])->name("enregistrer-formation");
