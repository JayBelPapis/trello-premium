<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller

{
    public function index()
    {
        $cards = Card::query()
            ->orderBy('id_card') // trié par ordre alphabétique
            ->get();
        //dd($cards);

        return view('cards.index')
            ->with([
                'cards' => $cards
            ]);
        //return view('cards.index', compact('cards'));
    }

    public function create()
    {
        return view('cards.create');
    }

    public function store(Request $request)
    {
        // $post = $request->validate([...]);
        $request->validate([
            'id_list' => 'nullable',
            'id_user' => 'nullable',
            'card_name' => 'required',
            'description' => 'required',
        ]);

        $card = [
            'id_list' => $request->input('id_list') ?? 1, // TODO à changer
            'id_user' => $request->input('id_user') ?? 1, // TODO à changer
            'card_name' => $request->input('card_name'),
            'description' => $request->input('description'),
        ];
        //dd($post);

        Card::create($card);

        //return view('cards.index'); => ne pas faire, il faut utiliser une redirection
        return redirect()->route('cards.index');
    }

    public function showCard($id)
    {
        $card = Card::find($id);
        return view('cards.show', compact('card'));
    }

    public function edit($id)
    {

        $card = Card::find($id);

        return view('cards.edit', compact('card'));
    }

    public function update(Request $request, $id)
    {
        $card = Card::find($id);

        $card->id_list = $request->input('id_list');
        $card->id_user = $request->input('id_user');
        $card->card_name = $request->input('card_name');
        $card->description = $request->input('description');
        $card->save();

        return redirect()->route('cards.show', $id);
    }

    public function destroy($id)
    {
        $card = Card::find($id);
        $card->delete();

        return redirect()->route('cards.index');
    }
}
