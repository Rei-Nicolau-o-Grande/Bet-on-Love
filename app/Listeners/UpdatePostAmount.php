<?php

namespace App\Listeners;

use App\Events\TicketCreated;
use App\Models\Post;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class UpdatePostAmount
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TicketCreated $event): void
    {
        $ticket = $event->ticket;

        // Atualizar o amount do post relacionado
        $post = Post::find($ticket->post_id);
        if ($post) {
            Log::info("Listener chamado para Ticket ID: {$ticket->id}");
            $post->amount = $post->tickets()->sum('value'); // Soma o valor de todos os tickets ao amount
            $post->save();
        }

    }
}
