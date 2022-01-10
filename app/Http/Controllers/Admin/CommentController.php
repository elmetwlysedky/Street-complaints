<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{

    public function store(CommentRequest $request)
    {
        $data = $request->validated();
        $path = Storage::disk('public')->putFile('Comment',$request->file);
        $data['file']= $path;

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
