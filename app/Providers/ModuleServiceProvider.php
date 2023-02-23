<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\ModuleMaster;
use App\Models\SubmoduleMaster;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Layout sidebar navigation
        view()->composer('layouts.dashboard.partials.sidemenu', function($view){
            $modules = ModuleMaster::all();
            $submodules = SubmoduleMaster::all();
            $view->with(['modules' => $modules, 'submodules' => $submodules]);
        });

    }
}
