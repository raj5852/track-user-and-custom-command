<?php
namespace Raj5852\Usertracker;

use Illuminate\Support\ServiceProvider;

class UsertrackerServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadMigrationsFrom(__DIR__.'/database/migrations' );
    }
    public function register()
    {

    }
}
