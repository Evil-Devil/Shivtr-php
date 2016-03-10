<?php
namespace Shiftr\Facades;

use Shivtr\ShivtrClient;

class Authentication
{
    private static $API_ENDPOINT_SIGN_IN = 'users/sign_in.json';
    private static $API_ENDPOINT_SING_OUT = 'users/sing_out.json';

    /** @var ShiftrClient */
    private $client;

    public function __construct(ShivtrClient $client)
    {
        $this->client = $client;
    }

    public function login($email, $password)
    {
        $response = $this->client->post(
            self::$API_ENDPOINT_SIGN_IN,
            ['user' => ['email' => $email, 'password' => $password]]
        );
        return $response;
    }

    public function logout($authToken)
    {
        $response = $this->client->get(
            self::$API_ENDPOINT_SING_OUT,
            ['auth_token' => $authToken]
        );
        return $response;
    }
}