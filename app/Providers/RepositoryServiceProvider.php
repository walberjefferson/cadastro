<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\CccRepository', 'App\Repositories\CccRepositoryEloquent');
        $this->app->bind('App\Repositories\CccistaRepository', 'App\Repositories\CccistaRepositoryEloquent');
        $this->app->bind('App\Repositories\UserRepository', 'App\Repositories\UserRepositoryEloquent');
    }
}
