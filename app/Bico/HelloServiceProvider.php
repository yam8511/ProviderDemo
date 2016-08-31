<?php

namespace App\Bico;

use Illuminate\Support\ServiceProvider;
use App\Contract\iHello;
use App\Bico\HelloBico;

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
