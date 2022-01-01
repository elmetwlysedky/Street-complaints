<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReasonRequest;
use App\Models\Reason;
use Illuminate\Http\Request;

class ReasonController extends Controller
{
    public function index()
    {
        $Reasons = Reason::all();
        return view('Dashboard.Reason.index',compact('Reasons'));
    }


    public function create()
    {
        return view('Dashboard.Reason.create');
    }


    public function store(ReasonRequest $request)
    {
        $data = $request->validated();
        Reason::create($data);
        return redirect()->route('Reason.index');
    }

    public function show($id)
    {
        $Reason =Reason::findorfail($id);
        return view('Dashboard.Reason.show', compact('Reason'));
    }


    public function edit($id)
    {
        $Reason =Reason::findorfail($id);
        return view('Dashboard.Reason.edit', compact('Reason'));
    }


    public function update(ReasonRequest $request, $id)
    {
        $Reason = Reason::findorfail($id);
        $data = $request->validated();
        $Reason ->update($data);
        return redirect()->route('Reason.index');
    }


    public function destroy($id)
    {
        $Reason=Reason::findorFail($id);
        $Reason->delete();
        return redirect()->route('Reason.index');
    }
}
