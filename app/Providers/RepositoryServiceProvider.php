<?php

namespace App\Providers;

use App\Interfaces\EloquentBaseRepository;
use App\Interfaces\EloquentRepositoryInterface;
use App\Interfaces\Repo\AuthorRepo;
use App\Repositories\AuthorRepoImpl;

/**
 * Laravel ServiceProvider to bind model repository interfaces to their implementations.
 *
 * @author Imtiaz Rahi
 * @since 2022-11-07
 * @see https://dev.to/carlomigueldy/getting-started-with-repository-pattern-in-laravel-using-inheritance-and-dependency-injection-2ohe
 */
class RepositoryServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /** Register repository interfaces and their implementations */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class, EloquentBaseRepository::class);
        // Application model repositories
        $this->app->bind(AuthorRepo::class, AuthorRepoImpl::class);
    }

    /** Bootstrap services */
    public function boot()
    {
    }
}
