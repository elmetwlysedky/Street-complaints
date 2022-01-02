<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttachmentRequest;
use App\Http\Requests\ProblemRequest;
use App\Models\Attachment;
use App\Models\City;
use App\Models\Problem;
use App\Models\Problem_destination;
use App\Models\Reason;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProblemController extends Controller
{
    public function index()
    {
        $Problems = Problem::latest()->get();
        return view('Dashboard.Problem.index',compact('Problems'));
    }


    public function create()
    {
        $Problem_destinations = problem_Destination::pluck('name','id');
        $Cities = City::pluck('name','id');
        $Reasons = Reason::pluck('name','id');
//        $Problem = Problem::$this->id;
        return view('Dashboard.Problem.create', compact('Cities','Problem_destinations','Reasons'));
    }


    public function store(Request $request )
    {
//        $data = $request->validated();

        $Problems = new Problem();
        $Problems->name =  $request->name;
        $Problems->user_id =$request->user_id;
        $Problems->city_id= $request->city_id;
        $Problems->problem_destination_id = $request->problem_destination_id;
        $Problems->status = $request->status;
        $Problems->reason_id = $request->reason_id;
        $Problems->tools = $request->tools;
        $Problems->causing = $request->causing;
        $Problems->description = $request->description;
        $Problems->save();


        if($request->hasfile('photos'))
        {
            foreach($request->file('photos') as $file) {

                $name = Storage::disk('public')->putFile('/Attachment/problem/' . $Problems->name, $file);

                $images = new Attachment();
                $images->file_name = $name;
                $images->problem_id = $Problems->id;
                $images->save();
            }
        }


        return redirect()->route('Problem.index');
    }

    public function show($id)
    {
        $Problem = Problem::findorfail($id);

        $Problem_destinations = problem_Destination::pluck('name','id');
        $Cities = City::pluck('name','id');
        $Reasons = Reason::pluck('name','id');
        $Attachment = Attachment::pluck('file_name','problem_id');

        return view('Dashboard.Problem.show', compact('Problem','Cities','Problem_destinations','Reasons','Attachment'));
    }


    public function edit($id)
    {
        $Problem =Problem::findorfail($id);
        $Problem_destinations = problem_Destination::pluck('name','id');
        $Cities = City::pluck('name','id');
        $Reasons = Reason::pluck('name','id');
        return view('Dashboard.Problem.edit', compact('Problem','Reasons','Problem_destinations','Cities'));
    }


    public function update(ProblemRequest $request, $id)
    {
        $Problem = Problem::findorfail($id);
        $data = $request->validated();
        $Problem ->update($data);

        if($request->hasfile('photos'))
        {
            foreach($request->file('photos') as $file) {

                $name = Storage::disk('public')->putFile('/Attachment/problem/' . $request->name, $file);

                $images = new Attachment();
                $images->file_name = $name;
                $images->problem_id = $Problem->id;
                $images->save();
            }
        }

        return redirect()->route('Problem.index');
    }


    public function destroy($id)
    {
        $Problem=Problem::findorFail($id);
        $Problem->delete();
        return redirect()->route('Problem.index');
    }


    public function home($id){
        $Problem = Problem::findorfail($id);
        return view('Dashboard.Problem.home',compact('Problem'));
    }
}
