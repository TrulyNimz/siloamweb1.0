<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Supported locales for the application.
     */
    protected array $supportedLocales = ['en', 'sw'];

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Priority: URL parameter > Session > Browser preference > Default
        $locale = $this->determineLocale($request);

        // Validate locale is supported
        if (!in_array($locale, $this->supportedLocales)) {
            $locale = config('app.fallback_locale', 'en');
        }

        // Set the application locale
        App::setLocale($locale);

        // Store in session for persistence
        session(['locale' => $locale]);

        return $next($request);
    }

    /**
     * Determine the locale from various sources.
     */
    protected function determineLocale(Request $request): string
    {
        // 1. Check URL parameter (highest priority for explicit switching)
        if ($request->has('locale')) {
            return $request->query('locale');
        }

        // 2. Check session (maintains user's choice)
        if (session()->has('locale')) {
            return session('locale');
        }

        // 3. Check browser's Accept-Language header
        $browserLocale = $request->getPreferredLanguage($this->supportedLocales);
        if ($browserLocale) {
            return $browserLocale;
        }

        // 4. Fall back to default
        return config('app.locale', 'en');
    }
}
