<?php

namespace App\Http\Middleware;

use App\Models\Tenant;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckTenant
{

    public function __construct(
//        private readonly Tenant $tenant,
    ){}

    public function handle(Request $request, Closure $next): Response
    {

//        $hasAccess = session()->get('has_acCess');
//
//        if ($hasAccess)
//        {
//            return $next($request);
//        }
//
//        $tenant = $this->validTenantcyExists($request);
//
//        session()->put('tenant', $tenant);
//
//        if (is_null($request->user()))
//        {
//            return $next($request);
//        }
//
//        if (auth()->user()->tenant->id !== $tenant->id)
//        {
//            auth()->logout();
//            return redirect('/login')->with('no_access', true);
//        }
//
//        $subdomainUrl = subdomain_url($tenant->prefix_domain, '');
//
//        config(['app.url' => $subdomainUrl]);
//        $request->session()->put('has_access', true);

        return $next($request);
    }

    protected function validTenantcyExists(Request $request):mixed
    {
        list($subdomain) = explode('.', $request->getHost(), 2);

        $tenant = $this->tenant->where('prefix_domain', $subdomain)->first();

        if ($tenant === null)
        {
            session()->put('is_master', true);
        }

        return $tenant;
    }
}
