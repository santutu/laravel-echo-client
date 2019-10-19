<?php


namespace Santutu\LaravelEchoClient\Models;


class MemoryUsage
{
    /**
     * @var int
     */
    public $rss;
    /**
     * @var int
     */
    public $heapTotal;
    /**
     * @var int
     */
    public $external;
    /**
     * @var int
     */
    public $heapUsed;

}
