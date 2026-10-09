<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    protected array $locales = ['en', 'zh'];

    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route('locale') ?? Session::get('locale');

        if ($locale && in_array($locale, $this->locales)) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        } else {
            $locale = App::getLocale();
        }

        return $next($request);
    }
}
