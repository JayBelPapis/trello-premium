@extends('layouts.app')


@section('content')

<h1>Edition du profil</h1>
    <form action="{{route('profile.update', $profileIdFront)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name" >{{ __('Name') }}</label>
            <input id="name" class="col-md-4" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$profileName}}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        <div class="form-group">
            <label for="email" >{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$profileEmail}}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        <div class="form-group">
            <label for="password" >{{ __('Password') }}</label><br>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

          </div>

          <div class="form-group row">
            <label for="password-confirm" >{{ __('Confirm Password') }}</label><br>
            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
        <a class="btn btn-primary" href="{{route('profile.show', $profileIdFront)}}">Retour</a>
        <form action="{{route('profile.destroy', $profileIdFront)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-warning">Supprimer profil</button>
        </form>


    </form>





@endsection
