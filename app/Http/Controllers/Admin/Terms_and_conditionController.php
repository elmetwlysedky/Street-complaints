<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Terms_and_conditionRequest;
use App\Models\Terms_and_condition;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Terms_and_conditionController extends Controller
{


    public function index()
    {

        $Terms_and_condition = Terms_and_condition::latest()->get();

        return view('Dashboard.Terms_and_condition.index',compact('Terms_and_condition'));
    }


    public function create()
    {
        return view('Dashboard.Terms_and_condition.create');
    }


    public function store(Terms_and_conditionRequest $request)
    {
        $data = $request->validated();
        Terms_and_condition::create($data);
        return redirect()->route('Terms_and_condition.index');
    }

    public function show($id)
    {
        $Terms_and_condition =Terms_and_condition::findorfail($id);
        return view('Dashboard.Terms_and_condition.show', compact('Terms_and_condition'));
    }


    public function edit($id)
    {
        $Terms_and_condition =Terms_and_condition::findorfail($id);
        return view('Dashboard.Terms_and_condition.edit', compact('Terms_and_condition'));
    }


    public function update(Terms_and_conditionRequest $request, $id)
    {
        $Terms_and_condition = Terms_and_condition::findorfail($id);
        $data = $request->validated();
        $Terms_and_condition ->update($data);
        return redirect()->route('Terms_and_condition.index');
    }


    public function destroy($id)
    {
        $Terms_and_condition=Terms_and_condition::findorFail($id);
        $Terms_and_condition->delete();
        return redirect()->route('Terms_and_condition.index');
    }
}
