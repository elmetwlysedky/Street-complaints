<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog_commentRequest;
use App\Models\Blog_comment;
use Illuminate\Http\Request;


class Blog_commentController extends Controller
{
    public function store(Blog_commentRequest  $request)
    {
        $data = $request->validated();
        Blog_comment::create($data);

        return redirect()->back();
    }

    public function show($id)
    {
        $Comment =Blog_comment::findorfail($id);
        return view('Dashboard.Comment.show', compact('Comment'));
    }


    public function edit($id)
    {
        $Comment =Blog_comment::findorfail($id);
        return view('Dashboard..edit', compact('Comment'));
    }


    public function update(CommentRequest $request, $id)
    {
        $Comment = Blog_comment::findorfail($id);
        $data = $request->validated();

        $Comment ->update($data);
        return redirect()->back();
    }


    public function destroy($id)
    {
        $Comment=Blog_comment::findorFail($id);
        $Comment->delete();
        return redirect()->back();
    }
}
