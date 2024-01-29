@extends("layouts.base")

@section("content")

    <form class="form-signin row col-sm-4 m-auto" action="{{ route("eleves.save") }}" method="POST">
    @csrf


    <div class="text-center mb-4">
    <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Ajouter eleve</h1>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
    <div class="form-label-group my-2">
        <label for="texteField">Nom</label>
        <input type="text" name="nom" class="form-control" placeholder="Nom de l'éleve" autofocus>
    </div>

    <div class="form-label-group my-2">
        <label for="texteField">Prenom</label>
        <input type="text" name="prenom" class="form-control" placeholder="Prenom" autofocus>
    </div>

    <div class="form-label-group my-2">
        <label for="texteField">Tuteur</label>
        <input type="text" name="tuteur" class="form-control" placeholder="Tuteur" autofocus>
    </div>

    <div class="form-label-group my-2">
        <label for="texteField">Sexe</label>
        <input type="sexe" name="sexe" class="form-control" placeholder="Sexe" autofocus>
    </div>

    <div class="form-label-group my-2">
        <label for="texteField">Age</label>
        <input type="number" name="age" class="form-control" placeholder="Age" autofocus>
    </div>
    <div class="form-label-group my-2">
        <label for="texteField">Adresse</label>
        <input type="text" name="adresse" class="form-control" placeholder="Adresse" autofocus>
    </div>


    <button class="btn btn-lg btn-primary btn-block" type="submit">enregistrer</button>
</form>

@endsection
