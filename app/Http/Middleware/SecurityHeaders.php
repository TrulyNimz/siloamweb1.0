<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Security headers for production environments.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only add headers if response supports them
        if (method_exists($response, 'header')) {
            // Prevent clickjacking attacks
            $response->header('X-Frame-Options', 'SAMEORIGIN');

            // Prevent MIME type sniffing
            $response->header('X-Content-Type-Options', 'nosniff');

            // Enable XSS filtering in browsers
            $response->header('X-XSS-Protection', '1; mode=block');

            // Control referrer information
            $response->header('Referrer-Policy', 'strict-origin-when-cross-origin');

            // Permissions policy (formerly Feature-Policy)
            $response->header('Permissions-Policy', 'geolocation=(), microphone=(), camera=()');

            // Content Security Policy (adjust as needed for your assets)
            if (config('app.env') === 'production') {
                $response->header('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
            }
        }

        return $response;
    }
}
