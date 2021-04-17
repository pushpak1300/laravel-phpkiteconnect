<?php

declare(strict_types=1);

namespace Pushpak1300\LaravelPhpKiteConnect;

use KiteConnect\KiteConnect;

class LaravelPhpKiteConnect
{
    public static function create(array $config): KiteConnect
    {
        return (new KiteConnect($config['zerodha_api_key']));
    }
}
