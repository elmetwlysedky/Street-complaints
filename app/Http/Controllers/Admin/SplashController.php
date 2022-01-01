<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SplashRequest;
use App\Models\Splash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SplashController extends Controller
{
    public function index()
    {
        $Splash = Splash::latest()->get();
        return view('Dashboard.Splash.index',compact('Splash'));
    }


    public function create()
    {
        return view('Dashboard.Splash.create');
    }


    public function store(SplashRequest $request)
    {
        $data = $request->validated();
        $path = Storage::disk('public')->putFile('/Splash',$request->photo);
        $data['photo']= $path;

        Splash::create($data);
        return redirect()->route('Splash.index');
    }

    public function show($id)
    {
        $Splash =Splash::findorfail($id);
        return view('Dashboard.Splash.show', compact('Splash'));
    }


    public function edit($id)
    {
        $Splash =Splash::findorfail($id);
        return view('Dashboard.Splash.edit', compact('Splash'));
    }


    public function update(SplashRequest $request, $id)
    {
        $Splash = Splash::findorfail($id);
        $data = $request->validated();
        $path = Storage::disk('public')->putFile('/Splash',$request->photo);
        $data['photo']= $path;
        $Splash ->update($data);
        return redirect()->route('Splash.index');
    }


    public function destroy($id)
    {
        $Splash=Splash::findorFail($id);
        $Splash->delete();
        return redirect()->back();
    }
}
