<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        view()->composer('*', function ($view) {
            if (Auth::check()) {
                $view->with([
                    'userGlobal' => User::find(Auth::user()->id),
                    'judul' => 'E-Office',
                    'identitas' => (object) [
                        'judul' => 'E-Office',
                        'footer' => 'E-Office Production 2024',
                        'version' => '1.0.0',
                    ],
                ]);
            } else {
                $view->with('userGlobal', null);
            }
        });
    }
}
