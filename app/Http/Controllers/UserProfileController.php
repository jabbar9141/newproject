<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserProfileController extends Controller
{
    //
    public function getProfileView(){
        //destroy session of the parking space
        session()->forget('parkingSpace');

        return view('settings.profile');
    }

    public function updateProfileInfo(Request $request){
        // return $request->email;
        $validator = Validator::make($request->all(),[
            'name' => 'required|min:3|max:50',
            'surname' => 'required',
            'avatar' =>'image|mimes:jpg,jpeg,png,gif',
            'email' => 'required|email',
            'sex' => 'string',
            'vahical_type' => 'string',
            'job' => 'string',
        ]);

        if ($validator->fails()) {
                return Redirect::back()->with('errors',$validator->errors());
            }

        if($request->hasFile('avatar')){
            $image = $request->file('avatar');
            $name = time().'.'.$image->getClientOriginalExtension();

            $des = public_path('/img/avatar/');
            $image->move($des, $name);
            // Storage::put("public/avatar/".$name,$name);
            $user = Auth::user()->update([
               'avatar' => $name,
            ]);
        }

        $user = User::updateOrCreate(
            [
                'id' => Auth::user()->id
            ],
            [
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'sex' => $request->sex,
                'job' => $request->job,
                'job_description' => $request->job_description,
                'identity_code' => $request->identity_code,
                'date_of_birth'=>Carbon::parse($request->date_of_birth),
                'description' => $request->description,
            ]
        );

        return Redirect::back()->with('msg','User Profile Information Update Successfully!');
    }

    public function resetPassword(Request $request){
        // return $request;
        $validation = Validator::make($request->all(),[
            'nueva_contrasena'=> 'min:8|required_with:confirmar_contrasena|same:confirmar_contrasena',
            'confirmar_contrasena' => 'min:8'
           ]);
        if($validation->fails()){
            return Redirect::back()
                   ->with('errors',$validation->errors());
        }
        // return 'yse';
            $user = Auth::user();
            // return $user;

            $user->password =  Hash::make($request->nueva_contrasena);
            $user->save();
            return Redirect::back()->with('msg','Password Reset Successfully..!');

    }
}
