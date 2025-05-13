<?php

namespace YourVendor\AfroMessageSms;

use Illuminate\Support\ServiceProvider;

class AfroMessageServiceProvider extends ServiceProvider
{
public function register()
{
$this->mergeConfigFrom(__DIR__.'/../config/afromessage.php', 'afromessage');

$this->app->singleton('afromessage', function () {
return new AfroMessage();
});
}

public function boot()
{
$this->publishes([
__DIR__.'/../config/afromessage.php' => config_path('afromessage.php'),
], 'config');
}
}