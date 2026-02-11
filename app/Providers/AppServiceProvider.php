<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Model;

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
        // Production-specific optimizations
        if (app()->environment('production')) {
            // Force HTTPS for all URLs
            URL::forceScheme('https');

            // Disable query logging to save memory
            DB::disableQueryLog();

            // Prevent lazy loading (catches N+1 issues in development)
            Model::preventLazyLoading(false);
        }

        // Development-specific settings
        if (app()->environment('local')) {
            // Enable strict mode to catch issues early
            Model::shouldBeStrict();
        }

        // Custom Blade directive for cache-busted assets
        Blade::directive('versionedAsset', function ($path) {
            return "<?php echo asset({$path}) . '?v=' . config('app.version', '1.0.0'); ?>";
        });
    }
}
