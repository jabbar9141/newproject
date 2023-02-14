<?php

namespace App\Http\Controllers;

use A6digital\Image\Facades\DefaultProfileImage;
use App\Mail\VerifyEmail;
use App\Models\User;
use App\Models\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthUserController extends Controller
{
    //
    public function newUser(Request $request){
        $surname = str_replace(' ', '', $request->surname);

        $fullName = ucfirst($request->name) .' '.ucfirst($surname);
        $img =   DefaultProfileImage::create($fullName,512,'#B0E0E6','#2A6092');
        $mediaName = Str::random(6).".png";
        $des = public_path('/img/avatar/');

        File::put($des.$mediaName, $img->encode());


        return true;
    }

    public function registerUser(Request $request){
        // return $request;

        $validator = Validator::make($request->all(),[
            'name' => 'required|min:3|max:50',
            'surname' => 'required',
            'email' => 'email|unique:users',
            'password' => 'min:8|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:8'
        ]);
//new commiit
        if ($validator->fails()) {
                return Redirect::back()
                       ->with('error_code',3)
                       ->with('errors',$validator->errors());
            }

        // return $data;

        $surname = str_replace(' ', '', $request->surname);
        $fullName = ucfirst($request->name) .' '.ucfirst($surname);
        $img =   DefaultProfileImage::create($fullName,512,'#B0E0E6','#2A6092');
        $mediaName = Str::random(6).".png";
        $des = public_path('/img/avatar/');
        File::put($des.$mediaName, $img->encode());
       //save into database
        $user = User::create([
          'name' => $request->name,
          'surname' => $request->surname,
          'avatar' =>$mediaName,
          'email' =>$request->email,
          'password' => Hash::make($request->password),
       ]);
       VerifyUser::create([
        'token' => Str::random(40),
        'user_id' => $user->id,
       ]);
       Mail::to($user->email)->send(new VerifyEmail($user));
       return Redirect::back()->with('success', 'Te hemos');

    }

    public function verifyEmail($token)
    {
        $verifiedUser = VerifyUser::where('token', $token)->first();
        // return $verifiedUser;
        if (isset($verifiedUser)) {
            $user = $verifiedUser->user;
            if (!$user->email_verified_at) {
                $user->email_verified_at = Carbon::now();
                $user->save();
                return Redirect::back()->with('welcomeuser', 4);
            } else {
                return Redirect::back()->with('welcomeuser', 4);
            }
        } else {
            return Redirect::back()->with('error_code', 5)->with('error', 'Something went wrong!!');
        }
    }



    public function loginUser(Request $request){
        //validation
       $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required'
      ]);

      if(Auth::attempt($credentials))
      {
        if (Auth::user()->email_verified_at == null) {
            Auth::logout();
            return Redirect::back()->with('success', 'Te hemos');
        }
        return redirect('/');
      }
      return Redirect::back()->with('error_code', 5)->with('error','No se ha podido iniciar sesión. Compruebe que los datos que has proporcionado son correctos.');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function openLogin(){
        return Redirect::back()->with('error_code', 5);
    }


}
