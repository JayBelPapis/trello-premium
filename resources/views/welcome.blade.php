<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
                <div class="block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button>Se déconnecter</button>
                        </form>

                    @else
                        <a href="{{ route('login') }}" class="button1">Se connecter</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Créer un compte</a>
                        @endif
                    @endauth

                </div>
                <section class="sectionApropos">

                    <div class="textCentre margBot">

                        <h2 class="heading">

                            Trello aide les équipes <br>
                            à faire avancer les choses !

                        </h2>

                    </div>

                    <div class="row">
                        <div class="doubleCol">
                            <p class="paragraphe">
                                Collaborez, gérez des projets et atteignez de nouveaux sommets en matière de productivité.
                                Depuis un gratte-ciel ou un bureau à domicile, la façon dont votre équipe travaille est unique. Accomplissez toutes vos tâches avec Trello.
                            </p>
                        </div>

                                 <div class="doubleCol">
                            <div class="composition">
                                <img src="https://mesemployes.com/app/uploads/discussion-competences-collegues-mixtes-510x296.jpg"
                                    alt="Photo 1" class="composition__photo composition__photo--p1">
                                <img src="https://www.acd-groupe.fr/wp-content/uploads/2020/10/Article_economie_collaborative.jpg"
                                    alt="Photo 2" class="composition__photo composition__photo--p2">
                                <img src="https://images.prismic.io/cadremploi-edito/7baae237-4f02-4be8-8adb-e259d6d57314_shutterstock_447034384.jpg?auto=compress,format&rect=0,84,1000,500&w=800&h=400"
                                    alt="Photo 3" class="composition__photo composition__photo--p3">
                            </div>
                        </div>

                    </div>

                </section>



    </body>
</html>

<style>
.button1
{
    background-color: #4CAF50; /* Green */
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

.button1
{
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;

}

.block {
    position: absolute;
    margin: 1%;
}
html {
    font-size: 16px;
    font-family: 'Lato';
}

body {
    margin: 0;
}


.textCentre {
    text-align: center;
}

.margBot {
    margin-bottom: 2rem;
}

.heading {
    font-size: 3.5rem;
    text-transform: uppercase;
    font-weight: 700;
    display: inline-block;
    background-image: linear-gradient(to right, #373737, #C0B283);
    -webkit-background-clip: text;
    color: transparent;
    letter-spacing: 0.2rem;
    transition: all .2s;
}


.heading:hover {
    transform: skewY(2deg) skewX(15deg) scale(1.1);
    text-shadow: 0.5rem 1rem 2rem rgba(0,0,0,0.2);
}


.row {
   display: flex;
   width: 100rem;
   margin: 0 auto;
   height: 51rem;
}

.row .doubleCol {
    width: calc((100% - 6rem) / 2);
    margin: 1rem;
}


.headingTxt {
    font-size: 1.6rem;
    font-weight: 700;
    text-transform: uppercase;
}

.margBotSm {
    margin-bottom: 1.5rem;
}

.paragraphe {
    font-size: 1.6rem;
    margin-bottom: 3rem;
}


.btn-text {
    font-size: 1.6rem;
    color: #373737;
    display: inline-block;
    text-decoration: none;
    border-bottom: 1px solid #C0B283;
    padding: 3px;
    transition: all .2s;
}

.btn-text:hover {
    background-color: #373737;
    color: #C0B283;
    box-shadow: 0 1rem 2rem rgba(0,0,0,0.15);
    transform: translateY(-2px);
}
.btn-text:active {
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
    transform: translateY(0);
}


.composition  {
    position: relative;
    margin-top: 2.8rem;
}


.composition__photo {
    width: 55%;
    box-shadow: 0 1.5rem 4rem rgba(0,0,0, 0.4);
    border-radius: 2px;
    position: absolute;
    z-index: 10;
    transition: all 0.2s;
    outline-offset: 2rem;
}


.composition__photo--p1 {
    left: 0;
    top: -2rem;
}
.composition__photo--p2 {
    right: 0;
    top: 2rem;
}
.composition__photo--p1 {
    left: 20%;
    top: 10rem;
}


.composition__photo:hover {
    outline: 1.5rem solid #c0b283;
    transform: scale(1.05) translateY(-0.5rem);
    box-shadow: 0 2.5rem 4rem rgba(0,0,0,0.5);
    z-index: 20;

}
.composition:hover .composition__photo:not(:hover) {
    transform: scale(0.95);
}

</style>
