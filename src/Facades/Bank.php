<?php
namespace Shivtr\Facade;

class Bank
{
    /** @var ShiftrClient */
    private $client;

    public function __construct(ShiftrClient $client)
    {
        $this->client = $client;
    }
}