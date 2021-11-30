
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
    
        
    
    </head>
<body>
    <h1 class="title text-3xl mb-6 text-center" style="margin-top:69px;">Se connecter sur trello</h1>
    <form method="POST" action="{{ route('login') }}" class="w-full max-w-sm mx-auto rounded-lg border shadow-md p-5 mb-5">
        @csrf

        <div class="mb-4">
            <label for="email" class="block font-semibold text-gray-700 mb-2">Email</label>
            <input id="email" type="email" name="email" class="shadow border rounded w-full p-2" value="{{ old('email') }}"
                autocomplete="email" placeholder="Votre email" autofocus>
            @error('email')
                <span class="text-red-400 text-sm">
                    <span>{{ $message }}</span>
                </span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block font-semibold text-gray-700 mb-2">Mot de passe</label>
            <input id="password" type="password" name="password" class="shadow border rounded w-full p-2"
                value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
            @error('password')
                <span class="text-red-400 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit"
            class="button2">Se connecter</button>
    </form>

</body>

</html>
 <style>
     .button2
{
    
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button2
{
    background-color: #C0B283;
    color: white;
    border-radius: 50% 20% / 10% 40%

}

h1 .title{
    color: #373737;
    margin-top: 30px;
}

</style>
