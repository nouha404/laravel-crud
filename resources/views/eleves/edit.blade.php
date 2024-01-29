@extends('layouts.base')

@section('content')

    .<div class="row justify-content-center align-items-center g-2">
        <div class="col">
            <a name="retour"  class="btn btn-primary" href="{{ route('eleves.index') }}" role="button">Annuler la modification</a>
        </div>
    </div>

    <h1 class="text-center" >Modification du produit</h1>
    <br>
    <form class="form-signin row col-sm-4 m-auto" action="{{ route("eleves.update", $eleve->id) }}" method="POST">
        @csrf

        <div class="text-center mb-4">
        </div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <div class="form-label-group my-2">
            <label for="titreInput">Nom de l'eleve</label>
            <input value="{{ $eleve->nom }}" name="nom" type="text" id="titreInput" class="form-control" placeholder="Entrer le nom de l'eleve" autofocus>
        </div>


         <div class="form-label-group my-2">
            <label for="imageInput">Prenom</label>
            <input value="{{ $eleve->prenom }}" name="prenom" type="text" id="prenomInput" class="form-control" placeholder="Prenom de l'éleve">
        </div>

         <div class="form-label-group my-2">
            <label for="imageInput">Tuteur</label>
            <input value="{{ $eleve->tuteur }}" name="tuteur" type="text" id="tuteurInput" class="form-control" placeholder="Le tuteur de l'élev">
        </div>

         <div class="form-label-group my-2">
            <label for="imageInput">sexe</label>
            <input value="{{ $eleve->sexe }}" name="sexe" type="text" id="sexeInput" class="form-control" placeholder="Sexe de l'éleve">
        </div>

         <div class="form-label-group my-2">
            <label for="imageInput">Age </label>
            <input value="{{ $eleve->age }}" name="age" type="number" id="ageInput" class="form-control" placeholder="Age de l'éleve">
        </div>
         <div class="form-label-group my-2">
            <label for="imageInput">Adresse</label>
            <input value="{{ $eleve->adresse }}" name="adresse" type="text" id="adresseInput" class="form-control" placeholder="Adresse de télephone">
        </div>


        <button class="btn btn-lg btn-primary btn-block" type="submit">Enregistrer</button>
    </form>
@endsection
