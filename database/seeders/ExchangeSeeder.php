<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Exchange;

class ExchangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exchanges = [
            ['name' => 'Binance', 'logo' => 'images/binance.png'],
            ['name' => 'OKX', 'logo' => 'images/okx.png'],
            ['name' => 'Crypto.com', 'logo' => 'images/crypto.png'],
            ['name' => 'Bybit', 'logo' => 'images/bybit.png'],
            ['name' => 'Bitget', 'logo' => 'images/bitget.png'],
            ['name' => 'HTX', 'logo' => 'images/htx.png'],
            ['name' => 'Kucoin', 'logo' => 'images/kucoin.png'],
            ['name' => 'Gate', 'logo' => 'images/gate.png'],
            ['name' => 'Mexc', 'logo' => 'images/mexc.png'],
        ];

        foreach ($exchanges as $exchange) {
            Exchange::create($exchange);
        }
    }
}
