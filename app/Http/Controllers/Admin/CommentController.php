<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{



    public function create()
    {
        return view('Dashboard.Comment.create');
    }


    public function store(CommentRequest $request)
    {
        $data = $request->validated();
        $path = Storage::disk('public')->putFile('Comment',$request->photo);
        $data['photo']= $path;

        Comment::create($data);
        return redirect()->back();
    }

    public function show($id)
    {
        $Comment =Comment::findorfail($id);
       return view('Dashboard.Comment.show', compact('Comment'));
    }


    public function edit($id)
    {
        $Comment =Comment::findorfail($id);
        return view('Dashboard.Comment.edit', compact('Comment'));
    }


    public function update(CommentRequest $request, $id)
    {
        $Comment = Comment::findorfail($id);
        $data = $request->validated();
        $path = Storage::disk('public')->putFile('Comment',$request->photo);
        $data['photo']= $path;

        $Comment ->update($data);
        return redirect()->back();
    }


    public function destroy($id)
    {
        $Comment=Comment::findorFail($id);
        $Comment->delete();
        return redirect()->back();
    }
}
