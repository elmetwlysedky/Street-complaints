<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $Items = Item::all();
        return view('Dashboard.Item.index',compact('Items'));
    }


    public function create()
    {
        return view('Dashboard.Item.create');
    }


    public function store(ItemRequest $request)
    {
        $data = $request->validated();
        Item::create($data);
        return redirect()->route('Item.index');
    }

    public function show($id)
    {
        $Item =Item::findorfail($id);
        return view('Dashboard.Item.show', compact('Item'));
    }


    public function edit($id)
    {
        $Item =Item::findorfail($id);
        return view('Dashboard.Item.edit', compact('Item'));
    }


    public function update(ItemRequest $request, $id)
    {
        $Item = Item::findorfail($id);
        $data = $request->validated();
        $Item ->update($data);
        return redirect()->route('Item.index');
    }


    public function destroy($id)
    {
        $Item=Item::findorFail($id);
        $Item->delete();
        return redirect()->route('Item.index');
    }
}
