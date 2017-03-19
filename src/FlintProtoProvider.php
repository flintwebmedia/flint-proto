<?php

namespace FlintWebmedia\FlintProto;

use Illuminate\Support\ServiceProvider;

class FlintProtoProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
        // Test
        $this->loadViewsFrom(__DIR__.'/resources/views', 'flintproto');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
