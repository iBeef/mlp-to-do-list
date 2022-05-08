<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class XssSanitizer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $allowedTags = [
            '<h1>', '<h2>', '<h3>',
            '<p>', '<a>', '<br>',
            '<strong>', '<em>', '<u>',
            '<a>', '<ol>', '<ul>',
            '<li>',
        ];
        $input = $request->all();
        array_walk_recursive($input, function(&$input) use($allowedTags) {
            $stripped = strip_tags($input, implode('', $allowedTags));
            $input = trim($stripped);
        });
        $request->merge($input);
        return $next($request);
    }
}
