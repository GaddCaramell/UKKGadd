<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
    
    protected $table = 'detail_penjualan';

    protected $primaryKey = 'detailID';
    
    public $incrementing = false;

    protected $guarded = [];
}
