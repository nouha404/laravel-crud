@extends("layouts.base")

@section("content")
    <div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <h1>Corbeille</h1>



        </div>



                @if ($eleves->isEmpty())
                     <a href="{{ route("eleves.index") }}" class="btn btn-sm btn-outline-warning">Ajouter un eleve</a>
                    @section("messageFooter")
                     <p class='text-center'>Aucun eleves !!</p>
                    @endsection
                @else
                <a class="btn btn-sm btn-success" href="{{ route('eleves.trashAll') }}">
                    <i class="bi bi-trash ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash " viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg>
                    </i> Delete All
                </a>


                @endif







    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col">#</th>
                <th class="col">Titre</th>
                <th class="col">Publié</th>
                <th class="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eleves as $eleve)
                <tr>
                    <td class="col">{{ $eleve->id }}</td>
                    <td class="col">{{ $eleve->nom ?? 'N/A' }}</td>
                    <td class="col">{{ $eleve->prenom ?? 'N/A' }}</td>
                    <td class="col">{{ $eleve->tuteur ?? 'N/A' }}</td>
                    <td class="col">{{ $eleve->sexe ?? 'N/A' }}</td>
                    <td class="col">{{ $eleve->age ?? 'N/A' }}</td>
                    <td class="col">{{ $eleve->adresse ?? 'N/A' }}</td>

                    <td class="col">
                        <a href="{{ route("eleves.restaure", $eleve->id) }}" class="btn btn-sm btn-outline-warning">Restaure</a>
                        <a href="{{ route("eleves.deletePermenant", $eleve->id) }}" class="btn btn-sm btn-outline-danger">Permenant delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
