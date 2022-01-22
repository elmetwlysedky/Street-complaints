<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Problem;
use App\Models\Item;

class Status_problemController extends Controller
{
    public function home($id){
        $Problem = Problem::findorfail($id);
        $Item = Item::pluck('name','id');
        return view('Dashboard.Problem.home',compact('Problem', 'Item'));
    }

    public function status(Request $request ,$id){
        $Status = Problem::findorfail($id);
        $Status ->status = $request->status;
        $Status->update();
        return redirect()->back();

    }


    public function new()
    {
        $NewProblem = Problem::where('status', 'new')->get();
        return view('Dashboard.Problem.new',compact('NewProblem'));
    }

    public function under_review()
    {
        $UnderReviewProblem = Problem::where('status', 'under_review')->get();
        return view('Dashboard.Problem.under_review', compact('UnderReviewProblem'));
    }

    public function previewed()
    {
        $PreviewedProblem = Problem::where('status' , 'previewed')->get();
        return view('Dashboard.Problem.previewed' , compact('PreviewedProblem'));
    }

    public function closed()
    {
        $ClosedProblem = Problem::where('status', 'closed')->get();
        return view('dashboard.Problem.closed', compact('ClosedProblem'));
    }
}
