<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Problem_DestinationRequest;
use App\Models\Problem_destination;
use Illuminate\Http\Request;

class Problem_destinationController extends Controller
{

    public function index()
    {
        $Problem_Destination = Problem_destination::all();
        return view('Dashboard.Problem_Destination.index',compact('Problem_Destination'));
    }


    public function create()
    {
        return view('Dashboard.Problem_Destination.create');
    }


    public function store(Problem_DestinationRequest $request)
    {
        $data = $request->validated();
        Problem_destination::create($data);
        return redirect()->route('Problem_Destination.index');
    }

    public function show($id)
    {
        $Problem_Destination =Problem_destination::findorfail($id);
        return view('Dashboard.Problem_Destination.show', compact('Problem_Destination'));
    }


    public function edit($id)
    {
        $Problem_Destination =Problem_destination::findorfail($id);
        return view('Dashboard.Problem_Destination.edit', compact('Problem_Destination'));
    }


    public function update(Problem_DestinationRequest $request, $id)
    {
        $Problem_Destination = Problem_Destination::findorfail($id);
        $data = $request->validated();
        $Problem_Destination ->update($data);
        return redirect()->route('Problem_Destination.index');
    }


    public function destroy($id)
    {
        $Problem_Destination=Problem_destination::findorFail($id);
        $Problem_Destination->delete();
        return redirect()->route('Problem_Destination.index');
    }
}
