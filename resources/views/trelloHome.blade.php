<body>
    <h1 class="title">Liste</h1>
    <form action="{{ route('home.store') }}" method="post" class="form">
        @csrf
        <input type="text" name="list_name" placeholder="list name"
            class="form-control
        @if ($errors->has('list_name')) is-invalid @endif">
        <br>
        <button class="link" type="submit">Valider</button>
    </form>

    <div class="trelloHome">
        @foreach ($column as $toto)
            <div class="list">
                <div class="header_list">
                    <h2 class="list_title">{{ $toto->list_name }}</h2>
                    <form action="{{ route('list.edit', $toto->id_list) }}" method="post">
                        @method('PUT')
                        @csrf
                        <input type="text" name="edit_list" id="edit_list" placeholder="edit list">
                    </form>
                    <form action="{{ route('list.destroy', $toto->id_list) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="delete_list" type="submit">X</button>
                    </form>

                </div>
                <form action="{{ route('home.card.storeCard') }}" method="post">
                    @csrf
                    <input type="text" name="card_name" placeholder="card name"
                        class="form-control
                    @if ($errors->has('card_name')) is-invalid @endif">
                    <input hidden type="text" name="id_list" value="{{ $toto->id_list }}">
                    <input hidden type="text" name="id_user" value="{{ $toto->id_user }}">
                    <input hidden type="text" name="description" value="description text">
                    <br>
                    <button class="link" type="submit">Valider</button>
                </form>
                <br>

                @foreach ($toto->cards as $card)
                    <div class="card">
                        {{ $card->card_name }}
                    </div>
                @endforeach

            </div>
        @endforeach
    </div>






    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </ul>
        </div>
    @endif


    <style>
        .trelloHome {
            display: flex;
            flex-wrap: wrap;

        }

        .list {
            background-color: #F1FFED;
            border: 2px solid green;
            border-radius: 8px;
            box-shadow: 2px 2px 8px black;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            padding: 20px;
            margin: 1%;
        }

        .list_title {
            color: rgb(69, 160, 69);
        }

        .header_list {

            display: flex;
            align-items: flex-end;
            margin: 1%;
        }

    </style>

</body>
