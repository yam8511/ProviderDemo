<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Zoular\iHello;
use App\Zoular\HelloBico;
use App\Zoular\HelloChungyo;


class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            iHello::class,
            HelloChungyo::class,
            HelloBico::class
        );
    }
}
