<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttachmentRequest;
use App\Models\Attachment;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    public function index()
    {
        $Attachments = Attachment::all();
        return view('Dashboard.Attachment.index',compact('Attachments'));
    }


    public function create()
    {
        return view('Dashboard.Attachment.create');
    }


    public function store(AttachmentRequest $request)
    {
        $data = $request->validated();
        $path = Storage::disk('public')->putFile('Attachment_problem',$request->photo);
        $data['photo']= $path;

        Attachment::create($data);
        return redirect()->back();
    }

    public function show($id)
    {
//        $Attachment =Attachment::findorfail($id);
//        return view('Dashboard.Attachment.show', compact('Attachment'));
    }


    public function edit($id)
    {
        $Attachment =Attachment::findorfail($id);
        return view('Dashboard.Attachment.edit', compact('Attachment'));
    }


    public function update(AttachmentRequest $request, $id)
    {
        $Attachment = Attachment::findorfail($id);
        $data = $request->validated();
        $path = Storage::disk('public')->putFile('Attachment_problem',$request->photo);
        $data['photo']= $path;

        $Attachment ->update($data);
        return redirect()->back();
    }


    public function destroy($id)
    {
        $Attachment=Attachment::findorFail($id);
        $Attachment->delete();
        return redirect()->back();
    }
}
