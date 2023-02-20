@extends("layouts.master")

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des referentiels</h3>
    <div>
        <div class="d-flex justify-content-end mb-4">
            <a href="{{route('afficher-formulaire-referentiel')}}" class="btn btn-primary">Ajouter un referentiel</a>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Validated</th>
                    <th scope="col">Horaire</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listeReferentiels as $referentiel)
                <tr>
                    <th scope="row">{{$referentiel->id}}</th>
                    <td>{{$referentiel->libelle}}</td>
                    <td>{{$referentiel->validated}}</td>
                    <td>{{$referentiel->horaire}}</td>
                    <td>{{$referentiel->type->libelle}}</td>
                    <td>
                        <a href="{{url('type/'.$referentiel->id.'/edit')}}" class="btn btn-info">Editer</a>
                        <a href="#" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
@endsection