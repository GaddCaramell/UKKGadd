<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggan';

    protected $primaryKey = 'pelangganID';

    public $incrementing = false;

    protected $guarded = [];

    public function Penjualan(): BelongsTo{
        return $this->belongsTo(Penjualan::class, 'penjualanID', 'penjualanID');
    }
    public function Transaksi(): BelongsTo{
        return $this->belongsTo(Transaksi::class,'transaksiID','transaksiID');
    }
}
