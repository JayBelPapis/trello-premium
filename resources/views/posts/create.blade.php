@extends('layout')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>
        <div class="form-group">
            <label for="author">Auteur</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="follower">Nombre de followers</label>
            <input type="number" class="form-control" id="follower" name="follower">
        </div>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
            </div>
        @endif

        <button type="submit" class="btn btn-primary">Créer le post</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Retour</a>
    </form>
@endsection
