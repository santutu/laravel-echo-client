<?php


namespace Santutu\LaravelEchoClient\Models;


class Channels
{
    /**
     * @var object
     */
    private $channels;

    public function __construct(
        object $channels
    )
    {
        $this->channels = $channels;
    }

    /**
     * @param string $channelName
     * @return Channel
     */
    public function getChannel(string $channelName): object
    {
        return $this->channels->$channelName;
    }
}
