@extends("layouts.master")

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des formations</h3>
    <div>
        <div class="d-flex justify-content-end mb-4">
            <a href="{{route('ajouter.formation')}}" class="btn btn-primary">Ajouter une formation</a>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Duree</th>
                    <th scope="col">Description</th>
                    <th scope="col">IsStasted</th>
                    <th scope="col">Date-debut</th>
                    <th scope="col">Date-fin</th>
                    <th scope="col">Referentiel</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listeFormations as $formation)
                <tr>
                    <th scope="row">{{$formation->id}}</th>
                    <td>{{$formation->nom}}</td>
                    <td>{{$formation->duree}}</td>
                    <td>{{$formation->isStasted}}</td>
                    <td>{{$formation->date_debut}}</td>
                    <td>{{$formation->date_fin}}</td>
                    <td>{{$formation->referentiel->libelle}}</td>
                    <td>
                        <a href="#" class="btn btn-info">Editer</a>
                        <a href="#" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
@endsection