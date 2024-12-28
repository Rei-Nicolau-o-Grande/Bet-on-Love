<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ticket\StoreTicketRequest;
use App\Models\Post;
use App\Models\Ticket;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TicketController extends Controller
{
    /**
     * Display User Tickets.
     */
    public function getUserTickets(): View
    {
        $userTickets = Ticket::where('user_id', auth()->user()->id)->paginate(30);
        return view('site.pages.user_tickets', compact('userTickets'));
    }

    /**
     * Display the specified Ticket.
     */
    public function showTicket(Ticket $ticket): View
    {
        return view('site.pages.show_ticket', compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createTicket(StoreTicketRequest $request, Post $post): RedirectResponse
    {
        $validated = $request->safe()->only(['value', 'end_date']);

        $ticketCreated = Ticket::create([
            'user_id' => auth()->user()->id,
            'post_id' => $post->id,
            'code' => substr(md5(uniqid(rand(), true)), 0, 18),
            'value' => $validated['value'],
            'end_date' => $validated['end_date']
        ]);

        return redirect()->route('showTicket', $ticketCreated->code)
            ->with('success', 'Ticket created successfully');
    }
}
