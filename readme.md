## Laravel Echo Client

__version 0.1__

### Installation

```bash
composer require santutu/laravel-echo-client
```

__Copy the package config to your local config with the publish command:__
```php
php artisan vendor:publish --provider="Santutu\LaravelEchoClient\ServiceProvider"
```

__Setting .env file__

```.env
LARAVEL_ECHO_CLIENT_SERVER_HOST=your echo server host. default is laravel-echo-server(with laradock).
LARAVEL_ECHO_CLIENT_SERVER_PORT=your echo server port. default is 6001.
LARAVEL_ECHO_CLIENT_APP_ID=your echo server app id
LARAVEL_ECHO_CLIENT_AUTH_KEY=yout echo server auth key
```

Get Host, Port, AppId, AuthKey in laravel-echo-server.json

Check https://github.com/tlaverdure/laravel-echo-server please.

### Usage

```php
EchoClient::getAppStatus();
EchoClient::getChannels();
EchoClient::getChannel('channalName');
EchoClient::getUsers('channalName');
```

 

