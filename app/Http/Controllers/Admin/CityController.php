<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function index()
    {
        $cities = City::all();
        return view('Dashboard.City.index',compact('cities'));
    }


    public function create()
    {
        return view('Dashboard.City.create');
    }


    public function store(CityRequest $request)
    {
     $data = $request->validated();
     City::create($data);
     return redirect()->route('city.index');
    }

    public function show($id)
    {
        $city =City::findorfail($id);
        return view('Dashboard.City.show', compact('city'));
    }


    public function edit($id)
    {
        $city =City::findorfail($id);
        return view('Dashboard.City.edit', compact('city'));
    }


    public function update(CityRequest $request, $id)
    {
        $city = City::findorfail($id);
        $data = $request->validated();
       $city ->update($data);
        return redirect()->route('city.index');
    }


    public function destroy($id)
    {
        $city=City::findorFail($id);
        $city->delete();
        return redirect()->route('city.index');
    }
}
