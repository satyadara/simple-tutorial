<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $data = Item::all();

        return view('item.index', ['data' => $data]);
    }

    function show($id)
    {
        $data = Item::find($id);

        return view('item.show', ['data' => $data]);
    }

    function edit($id)
    {
        $data = Item::find($id);

        return view('item.form', ['data' => $data]);
    }

    function update($id, Request $r)    {
        $data = Item::find($id);

        $data->name = $r->name;
        $data->stock = $r->stock;
        $data->price = $r->price;
        $data->save();

        return redirect()->route('home');
    }

    function create()   {
        $data = new Item;

        return view('item.form', ['data' => $data]);
    }

    function store(Request $r)    {
        $data = new Item;

        $data->name = $r->name;
        $data->stock = $r->stock;
        $data->price = $r->price;
        $data->save();

        return redirect()->route('home');
    }

    function delete($id)   {
        $data = Item::find($id);

        $data->delete();

        return redirect()->route('home');
    }
}
