<?php
#app\Http\Controllers\Auth\ForgotPasswordController.php

namespace App\Http\Controllers\auth;


use Carbon\Carbon;


use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

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

    // use SendsPasswordResetEmails;

    public function ForgetPassword()
    {
        return view('auth.forgot');
    }

    public function ForgetPasswordStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $token = \Str::random(64);
        \DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);
        $action_link = route('ResetPasswordGet', ['token' => $token, 'email' => $request->email]);
        $body = "We have received a request to reset the password for <b>Campevent</b> account associated with " . $request->email . ". You can reset your password by clicking the link below.";

        \Mail::send('email-forgot', ['action_link' => $action_link, 'body' => $body], function ($message) use ($request) {
            $message->from('noreply@example.com', 'Your App Name');
            $message->to($request->email, 'Doctor Name')
                ->subject('Reset Password');
        });

        return back()->with('success', 'We have e-mailed your password reset link');
    }

    public function showResetPassword(Request $request, $token = null)
    {
        // return view('auth.forget-password-link')->with(['token' => $token, 'email' => $request->email]);
        return view('auth.reset')->with(['token' => $token, 'email' => $request->email]);
    }

    public function ResetPasswordStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required',
        ]);

        $check_token = \DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if (!$check_token) {
            return back()->withInput()->with('fail', 'Invalid token');
        } else {
            User::where('email', $request->email)->update([
                'password' => Hash::make($request->password)
            ]);

            \DB::table('password_resets')->where([
                'email' => $request->email
            ])->delete();

            // return redirect("/login")->with('info', 'Your password has been changed! You can login with new password')->with('verifiedEmail', $request->email);
            return redirect("/resetcheck")->with('verifiedEmail', $request->email);
        }
    }
}
