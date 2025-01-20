<?php

namespace App\Providers;

use Laravel\Fortify\Fortify;
use Illuminate\Support\ServiceProvider;

class FortifyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Konfigurasi tampilan login dan pengaturan Fortify lainnya
        Fortify::loginView(function () {
            return view('auth.login');
        });
    }

    public function register()
    {
        //
    }
}
