@extends("layouts.master")

@section("contenu")
<form class="row gy-4 gx-3 align-items-center  mx-auto mt-5" method="POST" action="{{route('enregister-type')}}">
    @csrf
    <div class="col-auto">
        <label class="visually-hidden" for="autoSizingInput">Libelle</label>
        <input type="text" class="form-control" nom="libelle" id="autoSizingInput" name="libelle" placeholder="Libelle">
    </div>

    <div class="col-auto bm-4">
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
</form>
@endsection