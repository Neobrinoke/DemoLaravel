<?php

namespace App\Http\Middleware;

use Closure;

class CanDeleteTask
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $task = $request->route('task');
        if ($task->status === 2) {
            return $next($request);
        }

        abort(403);
    }
}
