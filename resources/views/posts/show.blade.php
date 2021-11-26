@extends('layout')

@section('content')
    @if(isset($post))
        <div class="card">
            <h5 class="card-header">Titre: {{ $post->title }}</h5>
            <div class="card-body">
                <h5 class="card-title">Auteur: {{ $post->author }}</h5>
                <p class="card-text">Contenu: {{ $post->content }}</p>
                <small class="text-warning">Nombre de followers: {{ $post->follower }}</small>
            </div>
        </div>
    @else
        Le post n'a pas été trouvé
    @endif

    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Retour</a>
@endsection
