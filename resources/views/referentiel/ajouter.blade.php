@extends("layouts.master")

@section("contenu")
<form class="row g-3 needs-validation mx-auto mt-5" method="POST" action="{{route('enregister-referentiel')}}">
    @csrf
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">Libelle</label>
        <input type="text" class="form-control" name="libelle" id="autoSizingInput" placeholder="Libelle">
    </div>
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">Valideted</label>
        <input type="boolean" class="form-control" name="validated" id="autoSizingInput" placeholder="Valideted">
    </div>
    <div class="col-md-4">
        <label class="visually-hidden" for="autoSizingInput">Horaire</label>
        <input type="datetime" class="form-control" name="horaire" id="autoSizingInput" placeholder="Horaire">
    </div>
    <select class="form-select" name="type_id" aria-label="Default select example">
        <option>selectionner le type du referentiel</option>
        @foreach($listeType as $type)
        <option value="{{$type->id}}">{{$type->libelle}}</option>
        @endforeach
    </select>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Envoyer</button>
    </div>
</form>
@endsection