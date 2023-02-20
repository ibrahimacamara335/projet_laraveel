@extends("layouts.master")

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des types</h3>
    <div>
        <div class="d-flex justify-content-end mb-4">
            <a href="{{route('afficher-formulaire')}}" class="btn btn-primary">Ajouter un type</a>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($types as $type)
                <tr>
                    <th scope="row">{{$type->id}}</th>
                    <td>{{$type->libelle}}</td>
                    <td>
                        <a href="#" class="btn btn-info">Editer</a>
                    </td>
                    <td class="text-center">
                        <a href='/type/supprimer/{{ $type->id }}' class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
@endsection