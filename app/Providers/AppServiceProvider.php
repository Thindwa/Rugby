<?php

namespace App\Providers;

use App\Models\About;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        RateLimiter::for('newsletter', fn ($request) => Limit::perMinute(5)->by($request->ip()));

        View::composer('*', function ($view) {
            $supportUrl = 'https://www.paypal.com/paypalme/Rugby4Education';
            try {
                $supportUrl = Cache::remember('site.support_url', now()->addMinutes(10), function () use ($supportUrl) {
                    if (Schema::hasTable('abouts') && Schema::hasColumn('abouts', 'support_url')) {
                        return About::query()->value('support_url') ?: $supportUrl;
                    }

                    return $supportUrl;
                });
            } catch (\Throwable $exception) {
                // Keep the fallback available while the database is unavailable.
            }
            $view->with('supportUrl', $supportUrl);
        });
    }
}
