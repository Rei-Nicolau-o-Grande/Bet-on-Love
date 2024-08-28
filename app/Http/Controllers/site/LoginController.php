<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('site.pages.login');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember-me');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return $this->handleRedirectBasedOnRole();
        }

        return back()->withErrors([
            'email' => __('The provided credentials do not match our records.'),
        ])->withInput();
    }

    protected function handleRedirectBasedOnRole(): RedirectResponse
    {
        $user = Auth::user();
        $isAdmin = $user->roles()->where('name', 'Administrator')->exists();

        if ($isAdmin) {
            return redirect()->route('users.index');
        }

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
