<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\VerifyUser;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    //halaman register dan simpan data register
    public function index()
    {
        return view('register');
    }
    public function store(Request $request)
    {

        // // mengvalidasi data nya agar ga ngasal
        // $validatedData = $request->validate([
        //     'fullname' => 'required|max:255', //wajib diisi | maksimal 255
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required|min:5|max:255|confirmed',
        //     'password_confirmation' => 'required'

        // ]);

        // if ($validatedData['password'] == $validatedData['password_confirmation']) {
        //     //$validatedData['password'] = bcrypt($validatedData['password']); //di enkripsi dulu
        //     $validatedData['password'] = Hash::make($validatedData['password']); //bisa juga pake cara yang ini
        //     $validatedData['password_confirmation'] = $validatedData['password'];

        //     User::create($validatedData); //masukin ke database

        //     //$request->session()->flash('success', 'Registration successfull! please login'); //nampilin pesan sukses di halaman login

        //     return redirect('/login')->with('success', 'Registration successfull! please login'); //sama aja kyk yg di atas, ini lebih simpel
        // } else {
        //     return back()->with('RegisterError', 'Register Failed');
        // }


        // register menggunakan verify email
        // mengvalidasi data nya agar ga ngasal
        $request->validate([
            'fullname' => 'required|max:255', //wajib diisi | maksimal 255
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255|confirmed',
            'password_confirmation' => 'required'

        ]);



        $user = new User();
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->password_confirmation = $user->password;
        $save = $user->save();
        $last_id = $user->id; //mengambil id user

        $token = $last_id . hash('sha256', \Str::random(120));
        $verifyURL = route('verify', ['token' => $token, 'service' => 'Email_verification']);

        VerifyUser::create([
            'user_id' => $last_id,
            'token' => $token,
        ]);

        $message = 'Dear <b>' . $request->fullname . '</b>';
        $message .= 'Thanks for signing up, we just need you to verify your email address to complete setting up your account.';

        $mail_data = [
            'recipient' => $request->email,
            'fromEmail' => $request->email,
            'fromName' => $request->fullname,
            'subject' => 'Email Verification',
            'body' => $message,
            'actionLink' => $verifyURL,
        ];

        // ddd($mail_data);

        \Mail::send('email-template', $mail_data, function ($message) use ($mail_data) {
            $message->to($mail_data['recipient'])
                ->from($mail_data['fromEmail'], $mail_data['fromName'])
                ->subject($mail_data['subject']);
        });

        if ($save) {
            return redirect('/registercheck')->with('success', 'You need to verify your account. We have sent you an activation link, please check your email.');
            // return redirect()->back()->with('success', 'You need to verify your account. We have sent you an activation link, please check your email.');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong, failed to register');
        }
    }

    public function registercheck()
    {
        return view('registercheck');
    }

    //verify email send
    public function verify(Request $request)
    {
        $token = $request->token;
        $verifyUser = VerifyUser::where('token', $token)->first();
        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;

            if (!$user->email_verified) {
                $verifyUser->user->email_verified = 1;
                $verifyUser->user->save();

                return redirect('/login')->with('info', 'Your email is verified successfully. You can now login')->with('verifiedEmail', $user->email);
            } else {
                return redirect('/login')->with('info', 'Your email is already verified. You can now login')->with('verifiedEmail', $user->email);
            }
        }
    }

    public function resendEmail(Request $request)
    {
    }





    //edit dan update profile
    public function getProfile(User $user)
    {
        return view("profile");
    }

    public function update(Request $request)
    {
        $request->validate([
            'fullname' => 'required|max:255', //wajib diisi | maksimal 255
            'email' => 'required|email:dns', //|unique:users, note : nanti cek lagi 
            'university' => 'max:255',
            'username' =>  ['max:255', 'unique:users,username,' . auth()->id()], //agar nama username tidak sama dengan yg lain, --
            //--tapi kalo untuk user itu sendiri gamau ganti username jadnya gakenapa kenapa
        ]);

        auth()->user()->update([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'university' => $request->university,
            'username' =>  $request->username,
        ]);

        return back()->with('success', 'your profile has been updated');
    }





    public function getChange()
    {
        return view('password_setting');
    }
    public function updateChange(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:5|max:255|confirmed',
        ]);

        //jika current password  sama dengan password user sekarang
        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
            return back()->with('success', 'your password has been updated');
        }

        throw ValidationException::withMessages([
            'current_password' => 'your current password does not match with our record',
        ]);
    }
}
