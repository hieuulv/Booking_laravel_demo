<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(
            \App\Repositories\HomeBookingHotelRepositoryInterface::class,
            \App\Repositories\HomeBookingHotelRepository::class
        );

        $this->app->singleton(
            \App\Repositories\BookingRoomRepositoryInterface::class,
            \App\Repositories\BookingRoomRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength('191');
    }
}
