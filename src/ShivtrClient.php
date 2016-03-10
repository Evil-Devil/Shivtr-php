<?php
namespace Shivtr;

class ShivtrClient {

    private $site = null;


    public function __construct($site) {
        if (empty($site) || !is_string($site)) {
            throw new \InvalidArgumentException('Supplied argument "site" is either empty or not a string.');
        }
        $this->site = $site;
    }

    public function get($apiEndpoint, array $data) {

    }

    public function post($apiEndpoint, array $data) {

    }

    public function put($apiEndpoint, array $data) {

    }

    public function delete($apiEndpoint, array $data) {

    }
}