# The Kite Connect API Laravel Client
The UnOfficial Laravel client for communicating with the [Kite Connect API](https://kite.trade).<br />

Kite Connect is a set of REST-like APIs that expose many capabilities required to build a complete investment and trading platform. Execute orders in real time, manage user portfolio and more, with the simple HTTP API collection.

## Documentation
- [PHP client documentation](https://kite.trade/docs/phpkiteconnect/v3)
- [Kite Connect HTTP API documentation](https://kite.trade/docs/connect/v3)

## Installing
### Requirements
You can install the package via composer:
```bash
composer require pushpak/laravel-phpkiteconnect
```
## Usage
```php
<?php
   
    // Assuming you have obtained the `request_token`
    // after the auth flow redirect by redirecting the
    // user to KiteConnect::login_url()
    try {
        $user = KiteConnect::generateSession("request_token_obtained", "your_api_secret");
        echo "Authentication successful. \n";
        print_r($user);
        KiteConnect::setAccessToken($user->access_token);
    } catch(Exception $e) {
        echo "Authentication failed: ".$e->getMessage();
        throw $e;
    }

    echo $user->user_id." has logged in";

    // Get the list of positions.
    echo "Positions: \n";
    dump(KiteConnect::getPositions());

    // Place order.
    $order = KiteConnect::placeOrder("regular", [
        "tradingsymbol" => "INFY",
        "exchange" => "NSE",
        "quantity" => 1,
        "transaction_type" => "BUY",
        "order_type" => "MARKET",
        "product" => "NRML"
    ]);

    echo "Order id is ".$order->order_id;
?>
```

## Examples
This package provide laravel facade to make work with KiteConnect
Refer to the [PHP client documentation](https://kite.trade/docs/phpkiteconnect/v3) for the complete list of supported methods.

## Changelog
[Check CHANGELOG.md](CHANGELOG.md)
