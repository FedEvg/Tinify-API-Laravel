<?php

namespace App\Components;

use GuzzleHttp\Client;

class ImportDataBinanceFutChart
{
    public $client;

    /**
     * @param $client
     */
    public function __construct()
    {
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://www.binance.com/',
            // You can set any number of default request options.
            'timeout'  => 2.0,
            'verify' => false,
        ]);
    }
}
