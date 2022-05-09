<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Social_links;

class SocialMediaServiceProvider extends ServiceProvider
{


    public $social_links;
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->social_links = Social_links::orderBy('updated_at','DESC')->first();

        view()->composer('layouts.footer',function($view) {
            $view->with(['social_links' => $this->social_links]);
        });
    }
}
