<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>@yield('title')</title>
</head>
<body>

{{-- contenu --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-12 my-5">
            @yield('content')
        </div>
    </div>
</div>


    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Trello

    </div>
    <!-- Copyright -->
</footer>
</body>
</html>
