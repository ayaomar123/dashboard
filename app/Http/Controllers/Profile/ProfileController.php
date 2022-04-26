<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
     public function edit()
    {
        $user = auth()->user();
        return view('pages.profile.my_profile',compact('user'));
    }


    public function update(Request $request)
    {
        $user = auth()->user();
        $filename="";
        $requestData= $request->all();

        if($request->image){
            $filename= $request->image->store('public/images');
            $imagename= $request->image->hashName();
            $requestData['image'] = $imagename;
        }
        $user->fill($requestData);
        //dd($requestData);
        $user->save();
        $user= User::find($request->id);
        if($user){
            $user->update($requestData);
        }
        session()->flash('msg','s:تم تعديل الملف الشخصي بنجاح');
        return redirect(route("profile.edit"));
    }
}
