<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show($id){
        $profile = Profile::findorfail($id);
        return view('Dashboard.Profile.index1' , compact('profile'));
    }

    public function update(Request $request , $id){

        $User = User::findorfail($id);
        $User = new User();
        $User->name = $request->name;
        $User->email =$request->email;
        $User->pone =$request->phone;
        $User->city_id =$request->city_id;
        $User->update();



            $Photo = Storage::disk('public')->putFile('Profile', $request->photo);


            $Background = Storage::disk('public')->putFile('background', $request->back_ground);


        $Profile = new Profile();
        $Profile->user_id = $request->user_id;
        $Profile->gender = $request->gender;
        $Profile->about = $request->about;
        $Profile->photo = $Photo;
        $Profile->back_ground = $Background ;
        $Profile->date_of_birth = $request ->date_of_birth;
        $Profile->update();

        return redirect()->back();

    }
}
