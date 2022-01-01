<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Social_contactRequest;
use App\Models\Social_contact;
use Illuminate\Http\Request;

class Social_contactController extends Controller
{
    public function index()
    {

        $Social_contact = Social_contact::latest()->get();

        return view('Dashboard.Social_contact.index',compact('Social_contact'));
    }


    public function create()
    {
        return view('Dashboard.Social_contact.create');
    }


    public function store(Social_contactRequest $request)
    {
        $data = $request->validated();
        Social_contact::create($data);
        return redirect()->route('Social_contact.index');
    }

    public function show($id)
    {
        $Social_contact =Social_contact::findorfail($id);
        return view('Dashboard.Social_contact.show', compact('Social_contact'));
    }


    public function edit($id)
    {
        $Social_contact =Social_contact::findorfail($id);
        return view('Dashboard.Social_contact.edit', compact('Social_contact'));
    }


    public function update(Social_contactRequest $request, $id)
    {
        $Social_contact = Social_contact::findorfail($id);
        $data = $request->validated();
        $Social_contact ->update($data);
        return redirect()->route('Social_contact.index');
    }


    public function destroy($id)
    {
        $Social_contact=Social_contact::findorFail($id);
        $Social_contact->delete();
        return redirect()->route('Social_contact.index');
    }
}
