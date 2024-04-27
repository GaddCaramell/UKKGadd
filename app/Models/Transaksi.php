<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $primaryKey = 'transaksiID';

    public $incrementing = false;

    protected $guarded = [];

    public function Produk(): HasMany{
        return $this->hasMany(Produk::class,'produkID','produkID');
    }

    public function Penjualan(): BelongsTo
    {
        return $this->belongsTo(Penjualan::class,'penjualanID','penjualanID');
    }
    
}
