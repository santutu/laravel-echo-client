<?php

namespace Santutu\LaravelEchoClient;


use Illuminate\Support\Collection;
use Santutu\LaravelEchoClient\Models\Channels;

class EchoClient
{

    private $presencePrefix = 'presence-';
    /**
     * @var string
     */
    private $host;
    /**
     * @var string
     */
    private $appId;
    /**
     * @var string
     */
    private $authKey;

    private $client;
    /**
     * @var string
     */
    private $port;

    public function __construct(
        string $host,
        string $port,
        string $appId,
        string $authKey

    )
    {
        $this->host = $host;
        $this->appId = $appId;
        $this->authKey = $authKey;
        $this->port = $port;
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $host . ':' . $port,
        ]);
    }

    /**
     * @return \Santutu\LaravelEchoClient\Models\AppStatus
     */
    public function getAppStatus(): object
    {
        $res = $this->client->get("apps/{$this->appId}/status?auth_key={$this->authKey}");

        return json_decode($res->getBody()->getContents());
    }


    public function getChannels(): Channels
    {
        $res = $this->client->get("apps/{$this->appId}/channels?auth_key={$this->authKey}");

        return new Channels(json_decode($res->getBody()->getContents())->channels);
    }

    /**
     * @param string $channelName
     * @return \Santutu\LaravelEchoClient\Models\Channel
     */
    public function getChannel(string $channelName): object
    {
        $res = $this->client->get("apps/{$this->appId}/channels/{$channelName}?auth_key={$this->authKey}");

        return json_decode($res->getBody()->getContents());
    }


    public function getUsers(string $channelName): Collection
    {
        if (mb_strpos($channelName, $this->presencePrefix) !== 0) {
            $channelName = $this->presencePrefix . $channelName;
        }

        $res = $this->client->get("apps/{$this->appId}/channels/{$channelName}/users?auth_key={$this->authKey}");

        return collect(json_decode($res->getBody()->getContents())->users);
    }


}
