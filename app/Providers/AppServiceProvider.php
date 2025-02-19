<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Doctrine\DBAL\Types\Type;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!Type::hasType('timestamp')) {
            Type::addType('timestamp', 'Doctrine\DBAL\Types\DateTimeType');
        }
    }
}
