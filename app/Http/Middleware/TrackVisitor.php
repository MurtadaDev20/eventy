<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visit;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Don't track certain routes
        if ($request->is('api/*') || $request->is('admin/*')) {
            return $next($request);
        }

        $ip = $request->ip();
        $userAgent = $request->header('User-Agent');

        // Simple device type detection
        $deviceType = $this->detectDeviceType($userAgent);

        // Only log if not already tracked recently
        if (!Visit::where('ip_address', $ip)->where('created_at', '>=', now()->subMinutes(30))->exists()) {
            Visit::create([
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'device_type' => $deviceType,
                'url' => $request->fullUrl(),
                'referrer' => $request->headers->get('referer'),
                'country' => null, // You can later enhance with a GeoIP API
            ]);
        }

        return $next($request);
    }

    /**
     * Simple device type detection using user-agent.
     */
    private function detectDeviceType(string $userAgent): string
    {
        $userAgent = strtolower($userAgent);

        if (str_contains($userAgent, 'mobile')) {
            return 'Mobile';
        } elseif (str_contains($userAgent, 'tablet')) {
            return 'Tablet';
        } else {
            return 'Desktop';
        }
    }
}
