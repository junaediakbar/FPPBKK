<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Printing extends Model
{
    use HasFactory;
    protected $fillable = [
        'P_id',
        'P_nama',
        'P_email',
        'P_alamat',
        'P_notelp',
    ];

    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}