<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\role\StoreRoleRequest;
use App\Http\Requests\role\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RoleAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $roles = Role::all();
        return view('admin.roles.pages.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.roles.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request): RedirectResponse
    {
        return redirect()->route('roles.index')
            ->with('warning', 'Resource not implemented.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role): View
    {
        return view('admin.roles.pages.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role): View
    {
        return view('admin.roles.pages.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role): RedirectResponse
    {
        $validated = $request->safe()->only(['name', 'description']);

        $role->update($validated);

        return redirect()->route('roles.show', $role->id)
            ->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role): RedirectResponse
    {
        $role->update([
            'is_active' => false
        ]);

        return redirect()->route('roles.show', $role->id)
            ->with('success', 'Role deleted successfully');
    }

    /**
     * Active the specified resource from storage.
     */
    public function active(Role $role): RedirectResponse
    {
        $role->update([
            'is_active' => true
        ]);

        return redirect()->route('roles.show', $role->id)
            ->with('success', 'Role activated successfully');
    }
}
