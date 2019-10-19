<?php


namespace Santutu\LaravelEchoClient;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom($this->getConfigPath(), 'echo-client');

        $this->app->singleton(EchoClient::class, function () {
            return new EchoClient(
                config('echo-client.host'),
                config('echo-client.port'),
                config('echo-client.app_id'),
                config('echo-client.auth_key')
            );
        });
    }

    public function boot()
    {
        $this->publishes([
            $this->getConfigPath() => config_path('echo-client.php')
        ], 'config');
    }


    protected function getConfigPath(): string
    {
        return __DIR__ . '/../config/echo-client.php';
    }

}