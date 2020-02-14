<?php

namespace Made\BigBuy;

use Illuminate\Support\ServiceProvider;

class BigBuyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/config/bigbuy.php' => config_path('bigbuy.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register(){
       
        $this->app->bind('bigbuy_client',function() {
            return new \Made\BigBuy\BigBuyClient(config('bigbuy.server'),config('bigbuy.timeout'),config('bigbuy.token'));
        });
        
    }
}
