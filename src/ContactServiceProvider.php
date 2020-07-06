<?php

namespace Codestacx\Contact;
use \Illuminate\Support\ServiceProvider;
 class ContactServiceProvider extends  ServiceProvider{

    public function boot(){


       $this->loadRoutesFrom(__DIR__.'/routes/web.php');
       $this->loadViewsFrom(__DIR__.'/views','codestacx');

       $this->loadMigrationsFrom(__DIR__.'/database/migration');
    }

    public function register(){

    }
}
