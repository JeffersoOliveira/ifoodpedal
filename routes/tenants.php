<?php

use Illuminate\Support\Facades\Route;

Route::group(array('domain' => "{subdomain}" . config('tenants.central_domain')), function (){
   Route::get('/', function ($subdomain){
       return redirect(subdomain_url($subdomain, '/admin'));
   }) ;

    Route::get('/login', function ($subdomain){
        session()->forget('tenant');
        return redirect(subdomain_url($subdomain, '/admin'));
    }) ;

    //rotas especificas para funcionalidades do seus tenants

});
