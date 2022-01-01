<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Who_are_weRequest;
use App\Models\who_are_we;
use Illuminate\Http\Request;

class Who_are_weController extends Controller
{
    public function index()
    {

        $Who_are_we = Who_are_we::latest()->get();

        return view('Dashboard.Who_are_we.index',compact('Who_are_we'));
    }


    public function create()
    {
        return view('Dashboard.Who_are_we.create');
    }


    public function store(Who_are_weRequest $request)
    {
        $data = $request->validated();
        Who_are_we::create($data);
        return redirect()->route('Who_are_we.index');
    }

    public function show($id)
    {
        $Who_are_we =Who_are_we::findorfail($id);
        return view('Dashboard.Who_are_we.show', compact('Who_are_we'));
    }


    public function edit($id)
    {
        $Who_are_we =Who_are_we::findorfail($id);
        return view('Dashboard.Who_are_we.edit', compact('Who_are_we'));
    }


    public function update(Who_are_weRequest $request, $id)
    {
        $Who_are_we = Who_are_we::findorfail($id);
        $data = $request->validated();
        $Who_are_we ->update($data);
        return redirect()->route('Who_are_we.index');
    }


    public function destroy($id)
    {
        $Who_are_we=Who_are_we::findorFail($id);
        $Who_are_we->delete();
        return redirect()->route('Who_are_we.index');
    }
}
