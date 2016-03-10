<?php
namespace Shivtr\Facades;

class Activities
{
    /** @var ShiftrClient */
    private $client;

    public function __construct(ShiftrClient $client)
    {
        $this->client = $client;
    }
}