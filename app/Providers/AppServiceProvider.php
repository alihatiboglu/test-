<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Mail;

use App\User;
use App\Mail\welcome;
class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
    
    }

    public function boot()
    {
        Schema::defaultStringLength(191);

        User::created(function($user){

        Mail::to($user)->send(new welcome());


        });



    
    }
}
