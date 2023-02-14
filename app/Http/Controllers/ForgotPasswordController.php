<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    //use SendsPasswordResetEmails;
    //Email verification for forget Password
    public function getForgetPasswordEmailView(){
        return Redirect::back()->with('emailview',1);
    }

    //send verification Email
    public function forgetPasswordEmailVerification(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' =>'required|email',
        ]);

        if ($validator->fails()) {
                return Redirect::back()->with('emailview',1)->with('errors',$validator->errors());
            }

        try {
            //Get User
            $user = User::where('email',$request->email)->get();
            // return $user;
            if(count($user) > 0){
                $token = Str::random(100);
                // return $token;

                $datetime = Carbon::now()->format('Y-m-d H:i:s');
                // return $datetime;
                // return $request->email;
                $passwordRest =  PasswordReset::updateOrCreate(
                   [
                    'email' => $request->email
                   ],
                   [
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => $datetime,
                    ]
                );
                // return $passwordRest;
                Mail::send('emails.forget-password-email', ['token' => $token,'user' => $user], function($message) use($request){
                    $message->to($request->email);
                    $message->subject('iTu nueva contraseña!');
                });
                // return $passwordRest;
                return redirect()->back()->with('success2','Please Check your mail for reset Password');

            }else{
                return redirect()->back()->with('message','Requested Email Not Found!');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('message', $e->getMessage());
        }
    }

    // Pass forget password user info to the view
    public function loadViewToResetPassword($token)
    {
           return Redirect::back()
                  ->with('forgetpassword',2)
                  ->with('token',$token);
    }
    // Forget Password
    public function resetForgetPassword(Request $request){
        // dd($request);
        $validation = Validator::make($request->all(),[
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:new_password'
        ]);
        if($validation->fails()){
            return Redirect::back()
                   ->with('forgetpassword',2)
                   ->with('errors',$validation->errors());

        }

        $updatePassword =DB::table('password_resets')
                    ->where('token',$request->token)->first();
        // return ;
        if(isset($updatePassword) == 1){
            $user = User::where('email',$updatePassword->email)->first();
            // return $user;
            if(Hash::check($request->old_password, $user->password)){
                $user->password =  Hash::make($request->new_password);
                $user->save();
                PasswordReset::where('token',$request->token)->delete();
                return Redirect::back()->with('message','Password Reset Successfully..!');
            }else{
                return Redirect::back()->with('forgetpassword',2)->with('error','Invalid old Password..!');
            }

        }else{
            return Redirect::back()->with('message','Invalid Token..!');
        }
    }


}
