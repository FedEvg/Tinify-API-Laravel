<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinanceFut extends Model
{
    use HasFactory;

    protected $table = 'binance_futs';

    protected $guarded = [];
}
