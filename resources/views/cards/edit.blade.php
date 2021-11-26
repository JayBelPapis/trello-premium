@extends('layout')

@section('content')
    <form action="{{ route('cards.update', $card->id_card) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="card_name">Card-name</label>
            <input type="text" class="form-control" id="card_name" name="card_name">
        </div>
        <div class="form-group">
            <label for="content">description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>

       @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
            </div>
        @endif

        <button type="submit" class="btn btn-primary">Modifier le post</button>
        <a href="{{ route('cards.index') }}" class="btn btn-secondary">Retour</a>
    </form>
@endsection
