<?php

namespace App\Providers;

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
        \Illuminate\Support\Facades\View::composer('*', function ($view) {
            $settings = \Illuminate\Support\Facades\Cache::rememberForever('general_settings', function () {
                return \App\Models\GeneralSetting::first() ?? new \App\Models\GeneralSetting();
            });
            $view->with('general_setting', $settings);
        });
    }
}
