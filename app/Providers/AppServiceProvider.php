<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot(UrlGenerator $url)
    {
        $url->forceScheme('https');
    }
}
