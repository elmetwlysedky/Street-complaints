<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $Contacts = Contact::latest()->get();
        return view('Dashboard.Contact.index', compact('Contacts'));
    }

    public function create()
    {
        return view('Dashboard.Contact.create');
    }


    public function store(ContactRequest $request)
    {
        $data = $request->validated();
        Contact::create($data);
        return redirect()->route('Contact.index');
    }

    public function show($id)
    {
        $Contact =Contact::findorfail($id);
        return view('Dashboard.Contact.show', compact('Contact'));
    }


    public function destroy($id)
    {
        $Contact=Contact::findorFail($id);
        $Contact->delete();
        return redirect()->route('Contact.index');
    }
}
