<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';

    protected $primaryKey = 'produkID';

    public $incrementing = false;

    protected $guarded = [];

    public function Transaksi(): BelongsTo
    {
        return $this->belongsTo(Transaksi::class, 'transaksiID','transaksiID');
    }

    public function Penjualan(): BelongsTo
    {
        return $this->belongsTo(Penjualan::class,'penjualanID','penjualanID');
    }
}
