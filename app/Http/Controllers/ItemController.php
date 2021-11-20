<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Item;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();

        return view('items.index', ['items' => $items]);
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(ItemRequest $request)
    {
        $item = new Item();

        $item->name = $request->name;
        $item->days = $request->days;
        $item->user_id = Auth::id();

        $item->save();

        return redirect()->route('item.index');
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
        if ($item->user_id !== Auth::id()) {
            return redirect('/');
        }

        return view('items.edit', ['item' => $item]);
    }

    public function update(ItemRequest $request, $id)
    {
        $item = Item::findorFail($id);

        if ($item->user_id !== Auth::id()) {
            return redirect('/');
        }

        $item->name = $request->name;
        $item->days = $request->days;

        $item->save();

        return redirect('/');
    }

    public function delete($id)
    {
        $item = Item::findOrFail($id);

        if ($item->user_id !== Auth::id()) {
            return redirect('/');
        }

        $item->delete();

        return redirect('/');
    }
}
