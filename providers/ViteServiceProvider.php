<?php namespace Mmes\Vite\Providers;

use October\Rain\Support\ServiceProvider;
use Mmes\Vite\Classes\ViteService;

class ViteServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('vite', function () {
            return new ViteService;
        });
    }
}
