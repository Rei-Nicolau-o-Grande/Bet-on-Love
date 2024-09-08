<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingsController extends Controller
{
    /**
     * View the settings page.
     */
    public function index(): View
    {
        $user = auth()->user();
        return view('site.pages.settings', compact('user'));
    }
}
