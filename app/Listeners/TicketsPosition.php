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

        // Define os limites do intervalo de 2 semanas antes e depois da finish_date
        $startDate = $finishDate->copy()->subWeeks(2)->toDateString();
        $endDate = $finishDate->copy()->addWeeks(2)->toDateString();

        // Busca todos os tickets associados ao post
        $allTickets = Ticket::where('post_id', $post->id)->get();

        // Filtra os tickets dentro do intervalo e ordena pela proximidade da finish_date
        $sortedTickets = $allTickets->filter(function ($ticket) use ($startDate, $endDate) {
            return $ticket->end_date >= $startDate && $ticket->end_date <= $endDate;
        })->sortBy(fn($ticket) => abs(strtotime($ticket->end_date) - strtotime($finishDate)))->values();

        // Define as posições para os 10 primeiros dentro do intervalo
        foreach ($sortedTickets as $index => $ticket) {
            if ($index < 10) {
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
                };
            } else {
                $position = TicketPlace::Loser;
            }

            $ticket->place = $position->value;
            $ticket->save();
        }

        // Define como Loser os tickets fora do intervalo de 2 semanas
        $outOfRangeTickets = $allTickets->reject(fn($ticket) => $ticket->end_date >= $startDate && $ticket->end_date <= $endDate);

        foreach ($outOfRangeTickets as $ticket) {
            $ticket->place = TicketPlace::Loser->value;
            $ticket->save();
        }
    }

}
