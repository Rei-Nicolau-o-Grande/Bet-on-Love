<?php

namespace App\Listeners;

use App\Enum\TicketPlace;
use App\Events\FinishDatePost;
use App\Models\Post;
use App\Models\Ticket;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TicketsPosition
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
    public function handle(FinishDatePost $event): void
    {
        $post = $event->post;
        $finishDate = $post->finish_date;

        // Filtra os tickets e ordena pelas datas mais próximas de finishDate
        $tickets = Ticket::where('end_date', '<=', $finishDate)
            ->orderByRaw('ABS(DATEDIFF(end_date, ?))', [$finishDate])
            ->get();

        // Atribui as posições no enum TicketPlace aos 10 primeiros tickets
        foreach ($tickets as $index => $ticket) {
            // Atribui uma posição de acordo com o índice
            $position = match ($index) {
                0 => TicketPlace::First,
                1 => TicketPlace::Second,
                2 => TicketPlace::Third,
                3 => TicketPlace::Fourth,
                4 => TicketPlace::Fifth,
                5 => TicketPlace::Sixth,
                6 => TicketPlace::Seventh,
                7 => TicketPlace::Eighth,
                8 => TicketPlace::Ninth,
                9 => TicketPlace::Tenth,
                default => TicketPlace::Loser,  // Para os tickets restantes
            };

            // Atualiza o ticket com a posição
            $ticket->place = $position->value;  // Assumindo que place é um campo na tabela 'tickets'
            $ticket->save();
        }
    }
}
