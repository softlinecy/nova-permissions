<?php

namespace Eminiarts\NovaPermissions\Http\Middleware;

use Eminiarts\NovaPermissions\NovaPermissions;
use Illuminate\Http\Response;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next): Response
    {
        return resolve(NovaPermissions::class)->authorize($request) ? $next($request) : abort(403);
    }
}
