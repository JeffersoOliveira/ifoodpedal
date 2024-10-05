<?php


use App\Models\Tenant;

if (!function_exists('tenant')){
    function tenant(): ?Tenant
    {
        return session('tenant');
    }
}

if(!function_exists('subdomain')){
    function subdomain(): string
    {
        $host = request()->host();

        return str($host)->explode('.')[0] ?? '';
    }
}

if (!function_exists('subdomain_url')){

    function subdomain_url(string $subdomain, string $path = ''): string
    {
        if (filled($path))
        {
            $path = str($path)->start('/')->toString();
        }

        $appUrl = config('app.url');

        $baseUrl = str($appUrl)
            ->replace('http://', '')
            ->replace('https://', '')
            ->toString();

        return "https://{$subdomain}.{$baseUrl}{$path}";
    }

}
