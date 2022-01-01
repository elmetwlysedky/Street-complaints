<?php

namespace App\Http\Controllers\Admin;

use App\Events\View_blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function home($id){
        $Blog = Blog::findorfail($id);
        event(new View_blog($Blog));
        return view('Dashboard.Blog.home', compact('Blog'));

    }

    public function index()
    {
        $Blog = Blog::latest()->get();
        return view('Dashboard.Blog.index',compact('Blog'));
    }


    public function create()
    {
        return view('Dashboard.Blog.create');
    }


    public function store(BlogRequest $request)
    {
        $data = $request->validated();
        $path = Storage::disk('public')->putFile('/Blog',$request->photo);
        $data['photo']= $path;

        Blog::create($data);
        return redirect()->route('Blog.index');
    }

    public function show($id)
    {
        $Blog =Blog::findorfail($id);
        return view('Dashboard.Blog.show', compact('Blog'));
    }


    public function edit($id)
    {
        $Blog =Blog::findorfail($id);
        return view('Dashboard.Blog.edit', compact('Blog'));
    }


    public function update(BlogRequest $request, $id)
    {
        $Blog = Blog::findorfail($id);
        $data = $request->validated();
        $path = Storage::disk('public')->putFile('/Blog',$request->photo);
        $data['photo']= $path;
        $Blog ->update($data);
        return redirect()->route('Blog.index');
    }


    public function destroy($id)
    {
        $Blog=Blog::findorFail($id);
        $Blog->delete();
        return redirect()->back();
    }
}
