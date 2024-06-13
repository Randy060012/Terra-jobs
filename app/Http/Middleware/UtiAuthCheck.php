<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UtiAuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('utilisateurId') && ($request->path() != 'index-login' && $request->path() != 'index-register')){
            return redirect('/Utilisateur/login')->with('fail','Erreur de l\'authentification');
        }

        if(session()->has('utilisateurId') && ($request->path() == 'index-login' || $request->path() == 'index-register')){
            return redirect('/utilisateur');
        }

        return $next($request)->header('Cache-Control','no-cache, no-store,max-age=0,must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');
    }
}
