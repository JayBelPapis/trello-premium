<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrelloHomeController extends Controller
{
    public function show($id)
    {
        return view('trelloHome')->with(["id" => $id]);
    }

    public function addList()
    {
    }
}
