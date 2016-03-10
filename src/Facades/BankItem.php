<?php
namespace Shivtr\Facade;

class BankItems
{
    /** @var ShiftrClient */
    private $client;

    public function __construct(ShiftrClient $client)
    {
        $this->client = $client;
    }
}