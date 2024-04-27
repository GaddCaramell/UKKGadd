<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penjualan extends Model
{
    use HasFactory;
    protected $table = 'penjualan';

    protected $primaryKey = 'penjualanID';
    
    public $incrementing = false;
    
    protected $guarded = [];

    public function index(){
        $sum = Produk::sum('hargaProduk');
        dd ($sum);
    }

    public function Pelanggan(): HasMany{
        return $this->hasMany(Pelanggan::class,'pelangganID','pelangganID');
    }
    public function Produk(): HasMany{
        return $this->hasMany(Produk::class,'produkID','produkID');
    }

    public function Transaksi(): HasMany{
        return $this->hasMany(Transaksi::class,'transaksiID','transaksiID');
    }
}
