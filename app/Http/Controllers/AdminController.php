<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showAdminOverview()
    {
        return view('admin.overview');
    }

    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',   
            'password' => 'required|string', 
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('admin.overview')->with('success', 'Anmeldung Erfolgreich');
        }

        return back()->withErrors(['error' => 'Anmeldung Fehlgeschlagen']);
    }

    public function redirectAdmin()
    {
        if (auth()->check()) {
            return redirect()->route('admin.overview');
        } else {
            return redirect()->route('admin.login');
        }
    }


}
