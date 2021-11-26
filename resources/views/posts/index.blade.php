@extends('layout')

@section('content')
    <h1>Liste de tous les posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Créer un nouveau post</a>
    <br><br>
    @foreach($posts as $post)
        <div class="card">
            <h5 class="card-header">Titre: {{ $post->title }}</h5>
            <div class="card-body">
                <h5 class="card-title">Auteur: {{ $post->author }}</h5>
                <p class="card-text">Contenu: {{ $post->content }}</p>
                <small class="text-warning">Nombre de followers: {{ $post->follower }}</small>
                <a class="btn btn-primary" href="{{ route('posts.show', $post->id) }}">Voir le post</a>
                <a class="btn btn-warning" href="{{ route('posts.edit', $post->id) }}">Editer le post</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Supprimer le post</button>
                </form>
            </div>
        </div>
        <br>
    @endforeach
@endsection
