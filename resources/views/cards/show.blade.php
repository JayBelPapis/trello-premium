@extends('layout')

@section('content')
    @if(isset($card))
        <div class="card">
            <h5 class="card-header">Nom de la carte: {{ $card->card_name }}</h5>
            <div class="card-body">
                <h5 class="card-title">Description: {{ $card->description }}</h5>
            </div>
        </div>
    @else
        La carte n'a pas été trouvé
    @endif

    <a href="{{ route('cards.index') }}" class="btn btn-secondary">Retour</a>
@endsection
