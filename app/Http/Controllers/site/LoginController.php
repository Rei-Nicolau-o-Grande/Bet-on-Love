<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Providers\RoleRedirectService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{

    protected RoleRedirectService $roleRedirectService;

    /**
     * @param RoleRedirectService $roleRedirectService
     */
    public function __construct(RoleRedirectService $roleRedirectService)
    {
        $this->roleRedirectService = $roleRedirectService;
    }


    public function index(): View
    {
        return view('site.pages.login');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember-me');

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();
            if ($user && !$user->active) {
                $user->active = true;
                $user->save();
            }
            $request->session()->regenerate();
            return $this->roleRedirectService->handleRedirectBasedOnRole();
        }

        return back()->withErrors([
            'email' => __('The provided credentials do not match our records.'),
        ])->withInput();
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
