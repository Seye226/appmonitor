<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //-------DEBUT-TRYING-------

            //TO-DO: Register the component globally

                //-------test_01-------
 
                // Blade::component('compo-plugs.site-posted-data', \App\View\CompoPlugs\SitePostedData::class);
                //         // Blade::component('CompoPlugs.SitePostedData', \App\View\CompoPlugs\SitePostedData::class);
                // // OR
                //     // Blade::anonymousComponentPath(base_path('\App\View\CompoPlugs\SitePostedData'), 'compo-plugs.site-posted-data');
                // // OR
                //     // Blade::componentNamespace(base_path('App\\View\\CompoPlugs\\SitePostedData'), 'compo-plugs.site-posted-data');

                //-------test_02-------

                    //     // View::share('appName', config('app.name'));
                    //     // View::share('appVersion', config('app.version'));
                    //     // View::share('appAuthor', config('app.author'));
                    //     // View::share('appDescription', config('app.description'));

                    // View::addNamespace('compo-plugs', resource_path('views/compo-plugs'));
                    // // View::addNamespace('compo-plugs', resource_path('compo-plugs'));

            //-------GOOD-------

                Blade::componentNamespace('App\View\CompoPlugs', 'compo-plugs');
                
        //-------END-TRYING-------


    }
}
