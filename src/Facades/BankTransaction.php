<?php
namespace Shivtr\Facade;

class BankTransaction
{
    /** @var ShiftrClient */
    private $client;

    public function __construct(ShiftrClient $client)
    {
        $this->client = $client;
    }
}