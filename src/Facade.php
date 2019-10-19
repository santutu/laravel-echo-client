<?php


namespace Santutu\LaravelEchoClient;


use Illuminate\Support\Collection;
use Santutu\LaravelEchoClient\Models\AppStatus;
use Santutu\LaravelEchoClient\Models\Channel;
use Santutu\LaravelEchoClient\Models\Channels;

/**
 * @method static AppStatus getAppStatus()
 * @method static Channels getChannels()
 * @method static Channel getChannel(string $channelName)
 * @method static Collection getUsers(string $channelName)
 *
 *
 *  * @see \Santutu\LaravelEchoClient\EchoClient;
 */
class Facade extends \Illuminate\Support\Facades\Facade

{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return EchoClient::class;
    }
}