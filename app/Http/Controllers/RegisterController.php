<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {

        // mengvalidasi data nya agar ga ngasal
        $validatedData = $request->validate([
            'fullname' => 'required|max:255', //wajib diisi | maksimal 255
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255|confirmed',
            'password_confirmation' => 'required'

        ]);

        if ($validatedData['password'] == $validatedData['password_confirmation']) {
            //$validatedData['password'] = bcrypt($validatedData['password']); //di enkripsi dulu
            $validatedData['password'] = Hash::make($validatedData['password']); //bisa juga pake cara yang ini
            $validatedData['password_confirmation'] = $validatedData['password'];

            User::create($validatedData); //masukin ke database

            //$request->session()->flash('success', 'Registration successfull! please login'); //nampilin pesan sukses di halaman login

            return redirect('/login')->with('success', 'Registration successfull! please login'); //sama aja kyk yg di atas, ini lebih simpel
        } else {
            return back()->with('RegisterError', 'Register Failed');
        }
    }
}
