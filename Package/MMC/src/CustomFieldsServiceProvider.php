<?php

namespace Mmc\CustomFields;

class CustomFieldsServiceProvider extends \Illuminate\Support\ServiceProvider{
    
    
    public function register(){

    }

    public function boot(){
        $this->loadMigrationsFrom(__DIR__."/database/migrations");
        $this->loadRoutesFrom(__DIR__."/routes/web.php");
    }
}