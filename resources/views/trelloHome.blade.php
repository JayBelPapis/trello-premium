<body>
    <h1>Ajout Liste</h1>
    <form action="{{ route('home.store') }}" method="post" class="form">
        @csrf
        <input type="text" name="list_name" placeholder="list name"
            class="form-control
        @if ($errors->has('list_name')) is-invalid @endif">
        <br>
        <button class="link" type="submit">Valider</button>
    </form>
    @foreach ($column as $toto)
        {{ $toto->list_name }} <br>
        @foreach ($toto->cards as $card)
            {{ $card->card_name }}

        @endforeach
    @endforeach



    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </ul>
        </div>
    @endif


</body>
