<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Order extends Model
{
 
        protected $fillable = [
            'N_id',
            'user_id',
            'jumlah',
            'product_id',
            'tgl_masuk',
            'tgl_pengiriman',
        ];

    public function user()
    {
    	return $this->belongsTo(User::class,'user_id');
    }
    public function product()
    {
    	return $this->belongsTo(Product::class,'product_id');
    }
}