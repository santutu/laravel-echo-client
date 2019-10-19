<?php


namespace Santutu\LaravelEchoClient\Models;


class AppStatus
{
    /**
     * @var int
     */
    public $subscription_count;

    /**
     * @var float
     */
    public $uptime;
    /**
     * @var MemoryUsage
     */
    public $memory_usage;

}
