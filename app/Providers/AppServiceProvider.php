<?php

namespace App\Providers;

// use Illuminate\Auth\Access\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // use bootstrao
        Paginator::useBootstrap();


        // use gate class untuk menghilangkan menu sesuai user yang login
        // Gate::define('admin', function(User $user) {
        //     return $user->username === 'Saiful';
        // });

        Gate::define('admin', function(User $user) {
            return $user->is_admin;
        });
    }
}
