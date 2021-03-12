<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;


class isAdmin
{
    protected $auth;
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $request->session()->flash("error", "Todo guay");
        if ($this->auth->user()->role == "admin") {
            return $next($request);
        } else {
            return response(view('403error'), 403);
        }
    }
}
