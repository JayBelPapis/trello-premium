@extends('layout')

@section('content')
    <form action="{{ route('cards.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="card_name">Card-name</label>
            <input type="text" class="form-control" id="card_name" name="card_name">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>

        <button type="submit" class="btn btn-primary">Créer la carte</button>
        <a href="{{ route('cards.index') }}" class="btn btn-secondary">Retour</a>
    </form>
@endsection
