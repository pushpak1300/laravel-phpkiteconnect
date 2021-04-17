<?php

declare(strict_types=1);

namespace Pushpak1300\LaravelPhpKiteConnect;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Pushpak1300\LaravelPhpkiteconnect\LaravelPhpKiteConnect
 */
class LaravelPhpKiteConnectFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-phpkiteconnect';
    }
}
