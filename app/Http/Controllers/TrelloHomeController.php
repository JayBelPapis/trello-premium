<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Column;
use App\Models\User;
use Illuminate\Http\Request;
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

        $lists = Column::where('id_user', Auth::id())->get();

        return view('trelloHome')->with(["column" => $lists]);
    }
}
