<?php

namespace App\Providers;

use App\Forum\Interfaces\FrontendRepositoryInterface;
use App\Forum\Repositories\FrontendRepository;
use App\Forum\Interfaces\BackendRepositoryInterface;
use App\Forum\Repositories\BackendRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FrontendRepositoryInterface::class,function(){
            return new FrontendRepository;
        });

        $this->app->bind(BackendRepositoryInterface::class,function(){
            return new BackendRepository;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
