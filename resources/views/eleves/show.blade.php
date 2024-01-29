@extends("layouts.base")


@section("content")
.<div class="row justify-content-center align-items-center g-2">
    <div class="col">
        <a name="retour"  class="btn btn-primary" href="{{ route('eleves.index') }}" role="button">Retour</a>
    </div>
</div>


    @if ($eleve== null)
        <h4 style="color:red">Erreur! verifier votre requete</h4>
    @else
        <h1>Details de l'eleve {{ $eleve->id }}</h1>
        <h4>Nom :  {{ $eleve->nom }}</h4>
        <h4>Prenom :  {{ $eleve->prenom }}</h4>
        <h4>Tuteur :  {{ $eleve->tuteur }}</h4>
        <h4>Sexe :  {{ $eleve->sexe }}</h4>
        <h4>Age :  {{ $eleve->age }}</h4>
        <h4>Adresse :  {{ $eleve->adresse }}</h4>

    @endif


@endsection
