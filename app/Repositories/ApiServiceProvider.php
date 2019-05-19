<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(
            'App\Repositories\ApiRepositoryInterface',
            'App\Repositories\ApiRepository'
        );
    }
}