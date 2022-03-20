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
            'password' => 'required|min:5|max:255',
            'confirm_password' => 'required|min:5|max:255'

        ]);

        //$validatedData['password'] = bcrypt($validatedData['password']); //di enkripsi dulu
        $validatedData['password'] = Hash::make($validatedData['password']); //bisa juga pake cara yang ini
        $validatedData['confirm_password'] = Hash::make($validatedData['confirm_password']); //bisa juga pake cara yang ini

        User::create($validatedData); //masukin ke database

        //$request->session()->flash('success', 'Registration successfull! please login'); //nampilin pesan sukses di halaman login

        return redirect('/login')->with('success', 'Registration successfull! please login'); //sama aja kyk yg di atas, ini lebih simpel

    }
}
