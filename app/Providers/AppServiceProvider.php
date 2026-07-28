<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Portfolio;
use App\Observers\PortfolioObserver;

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
        // Set Default String Length
        Schema::defaultStringLength(191);
        
        // Register Portfolio Observer for featured uniqueness
        Portfolio::observe(PortfolioObserver::class);
    }
}
