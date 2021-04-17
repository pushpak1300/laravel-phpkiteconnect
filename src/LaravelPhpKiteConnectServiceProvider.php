<?php

namespace Pushpak1300\LaravelPhpKiteConnect;

use KiteConnect\KiteConnect;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelPhpKiteConnectServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-phpkiteconnect')
            ->hasConfigFile('kiteconnect');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/kiteconnect.php', 'phpkiteconnect');
        $this->app->bind(KiteConnect::class, function () {
            return LaravelPhpKiteConnect::create(config('kiteconnect'));
        });

        $this->app->singleton('laravel-phpkiteconnect', KiteConnect::class);
    }
}
