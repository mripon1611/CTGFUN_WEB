<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\apiRepositoryInterface;
use App\Repositories\apiRepository;

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
        $this->app->bind(apiRepositoryInterface::class, apiRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
