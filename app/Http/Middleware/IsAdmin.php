<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class IsAdmin
{
    /**
     * @var Guard
     */
    private $auth;

    /**
     * IsAdmin constructor.
     * @param Guard $auth
     */
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
    public function handle($request, Closure $next)
    {
        if (!$this->auth->user()->isAdmin()) {
            $this->auth->logout();
            $message = 'Usuario no autorizado';

            if ($request->ajax()) {
                return response('Unauthorized.', 401)->json([
                    'message' => $message
                ]);
            } else {
                \Session::flash('message', $message);
                return redirect()->to('login');
            }
        }

        return $next($request);
    }
}
