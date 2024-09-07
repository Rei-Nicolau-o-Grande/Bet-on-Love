<?php

namespace App\Providers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class RoleRedirectService extends ServiceProvider
{
    /**
     * Redireciona o usuário com base na role.
     *
     * @return RedirectResponse
     */
    public function handleRedirectBasedOnRole(): RedirectResponse
    {
        $user = Auth::user();
        $isAdmin = $user->roles()->where('name', 'Administrator')->exists();
        $isPlayer = $user->roles()->where('name', 'Player')->exists();

        return match (true) {
            $isAdmin => redirect()->route('users.index'),
            $isPlayer => redirect()->route('profile'),
            default => redirect()->route('login')
                ->withErrors(['message' => 'Você não tem permissão para acessar esta página.']),
        };

    }
}
