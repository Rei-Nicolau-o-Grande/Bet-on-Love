<?php

namespace App\Providers;

use App\Events\TicketCreated;
use App\Events\TicketValueUpdated;
use App\Listeners\UpdatePostAmount;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(RoleRedirectService::class, function ($app) {
            return new RoleRedirectService($app);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Event::listen(
            TicketCreated::class,
            UpdatePostAmount::class
        );
    }
}
