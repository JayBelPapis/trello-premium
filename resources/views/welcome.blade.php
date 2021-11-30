<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Trello</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body class="antialiased">
                
                <section class="sectionApropos">

                    <div class="textCentre margBot">

                        <h2 class="heading">
                            Trello Premium ©<br>
                        </h2>

                    </div>

                    <div class="row">
                        <div class="doubleCol">
                            <p class="paragraphe">
                                Voici notre Trello Premium ©, conçu par Jerome, Jorge, Seloua et Anthony.
                                Sur ce Trello Premium, une solution pour créer et gérer des tickets.
                            </p>

                            <div class="block">
                                @auth
                                     <!--<a href="{{ url('/home') }}" class="button1">Home</a>--><!--lien qui ne marche pas-->
                                    <a href="{{ route('home') }}" id="leftMarginButton" class="btn btn-lg btn-info">Accueil</a><!--lien qui marche-->
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button id="leftMarginButton" class="btn btn-lg btn-warning" >Se déconnecter</button>
                                    </form>
            
                                @else
                                    <a href="{{ route('login') }}" id="leftMarginButton" class="btn btn-lg btn-info">Se connecter</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" id="leftMarginButton" class="btn btn-lg btn-warning">Créer un compte</a>
                                    @endif
                                @endauth
            
                            </div>
                        </div>

                                 <div class="doubleCol">
                            <div class="composition">
                                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
                                    alt="Photo 1" class="composition__photo composition__photo--p1">
                                <img src="https://images.prismic.io/cadremploi-edito/7baae237-4f02-4be8-8adb-e259d6d57314_shutterstock_447034384.jpg?auto=compress,format&rect=0,84,1000,500&w=800&h=400"
                                    alt="Photo 2" class="composition__photo composition__photo--p2">
                                <img src="https://c.pxhere.com/photos/2c/66/men_employees_suit_work_greeting_business_office_chef-1282006.jpg!d"
                                    alt="Photo 3" class="composition__photo composition__photo--p3">
                            </div>

                        </div>

                    </div>

                </section>



    </body>
</html>

<style>


body {
    font-family: 'Nunito', sans-serif;
}
.block {
    position: flex; /*WTF???*/
    margin: 15%;
}
html {
    font-size: 16px;
    font-family: 'Lato';

}

body {
    margin: 0;
    color:black;

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
    margin: 50px;
}

.block{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items:center;
}

.heading:hover {
    transform: skewY(2deg) skewX(15deg) scale(1.1);
    text-shadow: 0.5rem 1rem 2rem rgba(0,0,0,0.2);
}


.row {
   display: absolute;
   width: 100%;
   margin: 0 auto;
}

.row .doubleCol {
    width: calc((100% - 6rem) / 2);
    margin: 0.3rem;
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

#leftMarginButton{
    margin: 15px;
    
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
    margin-top: 0.8rem;
}


.composition__photo {
    width: 65%;
    box-shadow: 0 1.5rem 4rem rgba(0,0,0, 0.4);
    border-radius: 4px;
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
.composition__photo--p3 {
    left: 10%;
    top: 10rem;
}

.composition__photo:hover {
    outline: 1rem solid #c0b283;
    transform: scale(1.05) translateY(-0.5rem);
    box-shadow: 0 2.5rem 4rem rgba(0,0,0,0.5);
    z-index: 20;

}
.composition:hover .composition__photo:not(:hover) {
    transform: scale(0.95);
}

#leftMarginButton:hover{
    transform: scale(1.05) translateY(-0.5rem);

}

</style>
