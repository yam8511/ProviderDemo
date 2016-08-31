<?php

namespace App\Chungyo;

use Illuminate\Support\ServiceProvider;
use App\Contract\iHello;
use App\Chungyo\HelloBico;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->bind(
            iHello::class,
            HelloBico::class
        );
    }
}
