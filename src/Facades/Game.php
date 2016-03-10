<?php
namespace Shivtr\Facades;

class Game
{
    /** @var ShiftrClient */
    private $client;

    public function __construct(ShiftrClient $client)
    {
        $this->client = $client;
    }
}