<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /** Register any application services */
    public function register()
    {
        // For lumen project ServiceProvider need to be registered in bootstrap/app.php
        $this->app->register(RepositoryServiceProvider::class);
    }
}
