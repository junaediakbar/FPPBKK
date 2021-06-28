<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable = [
        'Pr_id',
        'Pr_nama',
        'Pr_harga',
        'Pr_satuan',
    ];
    
    protected $primaryKey = 'Pr_id';

}
