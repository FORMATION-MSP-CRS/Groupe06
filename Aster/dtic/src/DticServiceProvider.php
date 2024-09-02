<?php

namespace Dtic\Aster;

use Illuminate\Support\ServiceProvider;

class DticServiceProvider extends ServiceProvider
{
    public function register()
    {
        
    }

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__."/database/migrations");
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
    }
}