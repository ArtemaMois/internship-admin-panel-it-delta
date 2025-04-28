<?php

namespace App\Providers;

use App\Facade\FilenameFacade;
use App\Services\FileNameService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // регистрируем свой сервис
        $this->app->singleton(UserService::class, function() {
            return new UserService();
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
