<?php

namespace App\Providers;

use App;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
      if (!App::environment('local')) {
        $url->formatScheme('https');
        $url->asset('', TRUE);
      }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      if (!App::environment('local')) {
        $this->app['request']->server->set('HTTPS', true);
      }
    }
}
