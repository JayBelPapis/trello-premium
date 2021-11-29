<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div id="navBarOrga" class="container-fluid">
                <div class="leftSide">
                    <a class="navbar-brand" href="/">Trello</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        
                            <a class="nav-link" href="{{ route('profile.show', $profileVariableFront ?? '') }}">Mon Profil</a>
                        
                    </div>
                </div>
                <div class="rightSide">
                    
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn btn-outline-success x-3">Se déconnecter</button>
                        </form>
                    
                    <a type="button" href="{{ route('home.show', $user->id ?? '') }}" class="btn btn-outline-success x-3">Crée nouvelle listes</a>

                    

            </div>
        </div>
      </nav>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>


                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
