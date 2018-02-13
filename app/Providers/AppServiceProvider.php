<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repository\NoticeRepository;
use App\Repository\BussinessRepository;

use App\Contracts\NoticesInterface;
use App\Contracts\BussinessInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(NoticesInterface::class, NoticeRepository::class);
        $this->app->singleton(BussinessInterface::class, BussinessRepository::class);
    }
}
