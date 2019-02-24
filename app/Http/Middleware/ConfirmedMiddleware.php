<?php

namespace Massaggi\Http\Middleware;

use Closure;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Softon\SweetAlert\Facades\SWAL;  
class ConfirmedMiddleware
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
        if (auth()->check() && auth()->user()->confirmed==1){


                return $next($request);
        }    

         swal()->info('Usuario Registrado ','debe confirmar su correo electronico !',['timer'=>15000, 'width'=> 800 ]);


            return redirect('/');
            
    }
}
