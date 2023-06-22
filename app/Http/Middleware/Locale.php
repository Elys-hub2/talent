<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    protected $languages = ['en', 'fr'];

    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('locale')) {
            session()->put('locale', $request->getPreferredLanguage($this->languages));
        }
        app()->setLocale(session('locale'));
        return $next($request);
    }
}
