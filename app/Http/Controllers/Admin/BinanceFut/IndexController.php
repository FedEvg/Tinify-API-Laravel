<?php

namespace App\Http\Controllers\Admin\BinanceFut;

use App\Components\ImportDataBinanceFutChart;
use App\Http\Controllers\Controller;
use App\Models\BinanceFut;


class IndexController extends Controller
{
    public function __invoke()
    {
//        $import = new ImportDataBinanceFutChart();
//        $response = $import->client->request('GET', '/fapi/v1/ticker/24hr');
//
//        $data = json_decode($response->getBody()->getContents());

//        foreach ($array as $coin)
//        {
//            BinanceFut::query()->firstOrCreate([
//                'symbol' => $coin->symbol
//            ],[
//                'symbol' => $coin->symbol
//            ]);
//        }
        $coins = BinanceFut::all();

        return view('admin.binance_fut.index', compact('coins'));
    }
}
