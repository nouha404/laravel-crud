@extends("layouts.base")

@section("content")
<form class="form-signin row col-sm-4 m-auto" action="{{ route("connexion") }}" method="POST">
    @csrf
    
    <div class="text-center mb-4">
    <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Connexion</h1>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif
    <div class="form-label-group my-2">
        <label for="inputEmail">Email</label>
        <input name="email" type="text" id="inputEmail" class="form-control" placeholder="Email address" autofocus>
    </div>

    <div class="form-label-group my-2">
        <label for="inputPassword">Mot de passe</label>
        <input name="mdp" type="password" id="inputPassword" class="form-control" placeholder="Password">
    </div>

    <div class="checkbox mb-3">
    <label>
        <input type="checkbox" value="remember-me"> Se souvenir de moi
    </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
</form>
@endsection