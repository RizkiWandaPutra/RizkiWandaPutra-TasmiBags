<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function produk(){
        return $this->belongTo('App\Models\Produk','produk_id','id');
    }

    public function pesanan(){
        return $this->belongTo('App\Models\Pesanan','pesanan_id','id');
    }
}