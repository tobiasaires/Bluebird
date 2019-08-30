<?php

namespace App\Providers;

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
        $this->app->bind(
            'App\Services\Contracts\ProjectServiceInterface',
            'App\Services\ProjectsService',
        );

        $this->app->bind(
            'App\Repositories\Contracts\ProjectRepositoryInterface',
            'App\Repositories\ProjectRepository'
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
    }
}
