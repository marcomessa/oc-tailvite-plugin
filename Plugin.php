<?php namespace Mmes\Vite;

use Backend;
use Illuminate\Support\Facades\App;
use Mmes\Vite\Components\HeadAssets;
use Mmes\Vite\Providers\ViteServiceProvider;
use System\Classes\PluginBase;

/**
 * Vite Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Vite',
            'description' => 'Plugin required for Vite TailwindCss Theme',
            'author'      => 'Mmes',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
        App::register(ViteServiceProvider::class);
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            HeadAssets::class => 'headAssets'
        ];
    }
}
