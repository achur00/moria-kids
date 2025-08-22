<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Submenu;
// use App\Models\Section;
use App\Models\Contact;

use Illuminate\Support\Str;
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




    
        
    View::composer(['layouts.vice_master'], function ($view) {
    $page = null;

    if (Str::is('service*', request()->path())) {
        $page = Page::where('name', 'services')->first();
    } elseif (request()->path() === 'contact') {
        $page = Page::where('name', 'contact')->first(); // Fix: Specify the correct page name
    }elseif (request()->path() === 'about') {
        $page = Page::where('name', 'about')->first(); // Fix: Specify the correct page name
    }


    $view->with('page', $page);
});

    View::share('allMenus', Menu::with(['submenu'])->get());
    View::share('contact', Contact::first());

    // });
}

}
