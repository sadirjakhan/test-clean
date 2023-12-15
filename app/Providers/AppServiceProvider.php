<?php

namespace App\Providers;

// use Illuminate\Contracts\View\View;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\Support\ServiceProvider;



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
    Paginator::useBootstrapFour();
    JsonResource::withoutWrapping();

    FacadesView::composer('components.navbar', function($view){
        $view->with('current_locale', App::currentLocale());
        $view->with('all_locales', config("app.all_locales"));
    });
    }
}
