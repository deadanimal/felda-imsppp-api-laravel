<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class EditProfileController extends Controller
{
   
    public function create()
    {
        return view('auth.edit-profile');
    }

    public function store(Request $request, User $user)
    {
        $request->validate([
            'nama' => ['required', 'string', 'max:255'],
            'statusPeserta' => ['required', 'string', 'max:255'],
            'alamatTetap' => ['required', 'string', 'max:255'],
            'kadPengenalan' => ['required', 'string', 'max:14'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'tarikhLahir' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'pekerjaan' => ['required', 'string', 'max:255'],
            'pendapatanBulanan' => ['required', 'regex:/^[0-9]+(\.[0-9][0-9]?)?$/'],
        ]);
        
        $user = User::find($request->id);
        $user->nama = $request->nama;
        $user->statusPeserta = $request->statusPeserta;
        $user->alamatTetap = $request->alamatTetap;
        $user->kadPengenalan = $request->kadPengenalan;
        $user->password = Hash::make($request->password); 
        $user->tarikhLahir = $request->tarikhLahir;
        $user->email = $request->email;
        $user->pekerjaan = $request->pekerjaan;
        $user->pendapatanBulanan = $request->pendapatanBulanan;
        $user->save(); 
        
        return redirect()->intended(RouteServiceProvider::HOME); 
    }
}
