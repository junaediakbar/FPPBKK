<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdPayment extends Model
{
    use HasFactory;
    protected $table = 'third_payments';
 
    protected $fillable = [
        'T_id','T_nama', 'T_nomor'
    ];
    
    protected $primaryKey = 'T_id';
}

