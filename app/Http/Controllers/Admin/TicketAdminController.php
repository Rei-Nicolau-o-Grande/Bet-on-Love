<?php

namespace App\Http\Controllers\Admin;

use App\Enum\TicketPlace;
use App\Http\Controllers\Controller;
use App\Http\Requests\ticket\StoreTicketRequest;
use App\Http\Requests\ticket\UpdateTicketRequest;
use App\Models\Ticket;
use Illuminate\View\View;

class TicketAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('admin.tickets.pages.index', [
            'tickets' => Ticket::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tickets_place = TicketPlace::cases();
        return view('admin.tickets.pages.create', compact('tickets_place'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket): View
    {
        return view('admin.tickets.pages.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }

    /**
     * Active the specified resource from storage.
     */
    public function active(Ticket $ticket)
    {
        //
    }
}
