@extends("layouts.master")

@section("contenu")
<form class="row g-3 needs-validation mx-auto mt-5" method="POST" action="{{route('enregistrer-candidat')}}">
    @csrf
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">Nom</label>
        <input type="text" class="form-control" id="autoSizingInput" placeholder="Nom">
    </div>
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">Prenom</label>
        <input type="text" class="form-control" id="autoSizingInput" placeholder="Prenom">
    </div>
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">Email</label>
        <input type="email" class="form-control" id="autoSizingInput" placeholder="Email">
    </div>
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">Age</label>
        <input type="date" class="form-control" id="autoSizingInput" placeholder="Age">
    </div>
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">NiveauEtude</label>
        <input type="text" class="form-control" id="autoSizingInput" placeholder="NiveauEtude">
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">Homme</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">Femme</label>
    </div>




    <div class="col-12">
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
</form>
@endsection