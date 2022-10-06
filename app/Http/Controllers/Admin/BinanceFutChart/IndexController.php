<?php

namespace App\Http\Controllers\Admin\BinanceFutChart;

use App\Components\ImportDataBinanceFutChart;
use App\Http\Controllers\Controller;
use App\Models\BinanceFut;


class IndexController extends Controller
{
    public function __invoke()
    {
        $import = new ImportDataBinanceFutChart();
        $response = $import->client->request('GET', 'fapi/v1/klines' . '?symbol=BTCUSDT&interval=5m&limit=1');
//        dd(json_decode($response->getBody()->getContents()));

        $array = json_decode($response->getBody()->getContents());

        foreach ($array as $item)
        {
            echo    'Open time: '.$item['0'] = date("H:i:s").'| '.
                    'Open: '.$item['1'].'| '.
                    'High: '.$item['2'].'| '.
                    'Low: '.$item['3'].'| '.
                    'Close: '.$item['4'].'| '.
                    'Close time: '.$item['6'] = date("H:i:s").'| '.
                '<br>';
        }

//        return view('admin.binance_fut.index');
    }
}
