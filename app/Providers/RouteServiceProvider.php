<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        // API rate limiting
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        // Contact form rate limiting (5 submissions per hour)
        RateLimiter::for('contact', function (Request $request) {
            return Limit::perHour(5)->by($request->ip())->response(function () {
                return redirect()->back()->with('error', __('messages.rate_limit_exceeded'));
            });
        });

        // Application form rate limiting (3 submissions per day)
        RateLimiter::for('application', function (Request $request) {
            return Limit::perDay(3)->by($request->ip())->response(function () {
                return redirect()->back()->with('error', __('messages.rate_limit_exceeded'));
            });
        });

        // Login rate limiting (5 attempts per minute)
        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->ip())->response(function () {
                return redirect()->back()->with('error', __('auth.throttle', ['seconds' => 60]));
            });
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }
}
