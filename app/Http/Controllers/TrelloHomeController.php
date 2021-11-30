<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\Column;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TrelloHomeController extends Controller
{
    public function show($id)
    {
        $specificColumn = Column::with('cards')->where('id_user', $id)->get();
        return view('trelloHome')->with(["column" => $specificColumn]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'list_name' => 'required|string|max:50',
        ]);

        $post = [
            'list_name' => $request->input('list_name'),
            'id_user' => Auth::id(),
        ];
        Column::create($post);

        return redirect()->route('home.show', Auth::id());
    }

    public function storeCard(Request $request)
    {

        $request->validate([
            'id_list' => 'nullable',
            'id_user' => 'nullable',
            'card_name' => 'required',
            'description' => 'required',
        ]);

        $card = [
            'id_list' => $request->input('id_list'), // TODO à changer
            'id_user' => $request->input('id_user'), // TODO à changer
            'card_name' => $request->input('card_name'),
            'description' => $request->input('description'),
        ];
        //dd($post);

        Card::create($card);

        return redirect()->route('home.show', Auth::id());
    }


    public function destroyList($id)
    {
        $list = Column::findOrFail($id);
        $list->delete();
        return redirect()->route('home.show', Auth::id());
    }

    public function destroyCard($id)
    {
        $card = Card::findOrFail($id);
        $card->delete();
        return redirect()->route('home.show', Auth::id());
    }

    public function editList(Request $request, $id)
    {
        $list = Column::findOrFail($id);
        $list->list_name = $request->input('edit_list');
        $list->save();
        return redirect()->route('home.show', Auth::id());
    }

    public function editCard(Request $request, $id)
    {
        $card = Card::findOrFail($id);
        $card->card_name = $request->input('edit_card');
        $card->save();

        return redirect()->route('home.show', Auth::id());
    }

    public function showCard($id)
    {
        $card = Card::find($id);
        return view('cards.show', compact('card'));
    }

    public function storeDescription(Request $request)
    {

        $request->validate([
            'description' => 'required|string|max:50',
        ]);

        $post = [
            'description' => $request->input('list_name'),
            'id_user' => Auth::id(),
        ];
        Card::create($post);

        return redirect()->route('card.show', Auth::id());
    }
}
