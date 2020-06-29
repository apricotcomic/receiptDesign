<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use vandor\tecnickcom\tcpdf;

class TcpdfServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('tcpdf',tcpdf::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
