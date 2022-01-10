<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReplyRequest;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReplyController extends Controller
{
    public function store(ReplyRequest $request)
    {
        $data = $request->validated();
        if($request->file != null) {
            $path = Storage::disk('public')->putFile('Reply', $request->file);
            $data['file'] = $path;
        }
//        dd($request);
        Reply::create($data);

        return redirect()->back();
    }

    public function show($id)
    {
        $Reply =Reply::findorfail($id);
        return view('Dashboard.Reply.show', compact('Reply'));
    }


    public function edit($id)
    {
        $Reply =Reply::findorfail($id);
        return view('Dashboard.Reply.edit', compact('Reply'));
    }


    public function update(ReplyRequest $request, $id)
    {
        $Comment = Reply::findorfail($id);
        $data = $request->validated();
        $path = Storage::disk('public')->putFile('Reply',$request->file);
        $data['file']= $path;

        $Comment ->update($data);
        return redirect()->back();
    }


    public function destroy($id)
    {
        $Comment=Reply::findorFail($id);
        $Comment->delete();
        return redirect()->back();
    }
}
