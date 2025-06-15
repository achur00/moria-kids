<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Submenu;
// use App\Models\Section;
// use App\Models\Contact;
use App\Models\MenuHelper;


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
    view()->composer(['layouts.master','layouts.vice_master','service_details','include.mgmt_highlight','contact',  'home'], function ($view) {
        // $id = request()->route('id'); // Get ID from the route
        // $service = null;
        // $serviceNewsletter = null; // Initialize to prevent errors

        // if ($id !== null) { // Only set when the route is service-related
        //     $service = Submenu::find($id);
        //     if ($service) {
        //         $serviceNewsletter = $service->Sections->where('type', 'Newsletter')->first();
        //     }
        // }

        // // Set the service based on the route path
        // if (request()->path() == 'our-people') {
        //     $service = Submenu::find(10);
        // }
        // elseif (request()->path() == 'about') {
        //     $service = Submenu::find(11);
        // }
        // elseif (request()->path() == 'contact') {
        //     $service = Submenu::find(12);
        // }

        // // profile
        // $mgmtProfiles=Section::with('Submenus')->where('type','Profile')->get();
        // // dd( $service);    

        // // foot
        // $aboutFooter = Submenu::where('name', 'About Us')->first();
        // $serviceFooter = Menu::with(['Submenus'])->where('id','3')->first();
        // $contact =Contact::first();

        // dd(Menu::with(['Submenus'])->get());
        $allMenus= Menu::with(['submenu'])->get();
        // Assigns the constant value MENU_HAS_CHILDREN from the MenuHelper class to the $menuHasChildren variable.
        // This is typically used to check or represent if a menu item has child items.
        // $menuHasChildren = MenuHelper::MENU_HAS_CHILDREN;
        $aboutIntro = Page::where('name', 'home')->first();
        

        // dd($allMenus);   
        $view->with('allMenus', $allMenus)
        // ->with('hasChildren',$menuHasChildren )
        ->with('aboutIntro', $aboutIntro);
        ;
    });
}

}
