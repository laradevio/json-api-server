<?php

namespace Swis\JsonApi\Server\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class InspectContentType
{
    public function handle(Request $request, Closure $next)
    {
//        if ('application/vnd.api+json' !== $request->header('Content-Type')) {
//            throw new ContentTypeNotSupportedException('Your request should be in json api format. (Content-Type: application/vnd.api+json)');
//        }

        return $next($request);
    }
}
