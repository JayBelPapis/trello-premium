@extends('layouts.app')


@section('content')

<h1>Votre Profil</h1>

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Informations du profil</h5>
      <p class="card-text">Ci-dessous les informations saisies lors de votre inscription</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item"> Nom : {{ $profileName}}</li>
      <li class="list-group-item"> Email : {{ $profileEmail}} </li>
      <li class="list-group-item"> Mot de Passe : Private </li>
    </ul>
    <div class="card-body">
        <a class="card-link" href="{{route('profile.edit', $profileIdFront)}}">Modifier profil</a>
        <a class="card-link" href="{{route('profile.index')}}">Retour</a>
    </div>
  </div>


@endsection
