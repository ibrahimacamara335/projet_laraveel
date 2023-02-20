@extends("layouts.master")

@section("contenu")
<form class="row g-3 needs-validationau mx-to mt-5" method="POST" action="{{route('enregistrer-formation')}}">
    @csrf
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">Nom</label>
        <input type="text" class="form-control" name="nom" id="autoSizingInput" placeholder="Nom">
    </div>
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">Duree</label>
        <input type="datetime" class="form-control" name="duree" id="autoSizingInput" placeholder="Duree">
    </div>
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">Description</label>
        <input type="text" class="form-control" name="description" id="autoSizingInput" placeholder="Description">
    </div>
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">IsStasted</label>
        <input type="text" class="form-control" name="isStasted" id="autoSizingInput" placeholder="IsStasted">
    </div>
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">Date-debut</label>
        <input type="date" class="form-control" name="date_debut" id="autoSizingInput" placeholder="Date-debut">
    </div>
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">Date-fin</label>
        <input type="date" class="form-control" name="date_fin" id="autoSizingInput" placeholder="Date-fin">
    </div>
    <select class="form-select" name="referentiel_id" aria-label="Default select example">
        <option>selectionner le referentiel du formation</option>
        @foreach($listeReferentiel as $referentiel)
        <option value="{{$referentiel->id}}">{{$referentiel->libelle}}"></option>
        @endforeach
    </select>





    <div class="col-12">
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
</form>
@endsection