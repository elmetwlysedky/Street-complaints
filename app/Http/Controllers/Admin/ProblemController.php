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


    public function store(ProblemRequest $request , AttachmentRequest $request_attach)
    {
        $data = $request->validated();

//        $file =$request_attach->validated();
        $path = Storage::disk('public')->putFile('/Attachment',$request_attach->file);
        $data['file']= $path;
        Problem::create($data);
        Problem::with('attachment')->create($data);

        return redirect()->route('Problem.index');
    }

    public function show($id)
    {
        $Problem =Problem::findorfail($id);
        $Problem_destinations = problem_Destination::pluck('name','id');
        $Cities = City::pluck('name','id');
        $Reasons = Reason::pluck('name','id');
        $Attachment = Attachment::pluck('file','problem_id');

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
        return redirect()->route('Problem.index');
    }


    public function destroy($id)
    {
        $Problem=Problem::findorFail($id);
        $Problem->delete();
        return redirect()->route('Problem.index');
    }
}
