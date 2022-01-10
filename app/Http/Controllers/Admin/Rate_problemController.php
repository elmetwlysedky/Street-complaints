<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rate_problemRequest;
use App\Models\Rate_problem;
use Illuminate\Http\Request;

class Rate_problemController extends Controller
{
    public function store(Rate_problemRequest  $request)
    {
        $data = $request->validated();
        Rate_problem::create($data);

        return redirect()->back();
    }

    public function show($id)
    {
        $Rate =Rate_problem::findorfail($id);
        return view('Dashboard.Comment.show', compact('Rate'));
    }


    public function edit($id)
    {
        $Rate =Rate_problem::findorfail($id);
        return view('Dashboard..edit', compact('Rate'));
    }


    public function update(Rate_problemRequest $request, $id)
    {
        $Rate = Rate_problem::findorfail($id);
        $data = $request->validated();

        $Rate ->update($data);
        return redirect()->back();
    }


    public function destroy($id)
    {
        $Rate=Rate_problem::findorFail($id);
        $Rate->delete();
        return redirect()->back();
    }
}
