<?php namespace Marcomessa\Vite\Providers;

use October\Rain\Support\ServiceProvider;
use Marcomessa\Vite\Classes\ViteService;

class ViteServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('vite', function () {
            return new ViteService;
        });
    }
}
