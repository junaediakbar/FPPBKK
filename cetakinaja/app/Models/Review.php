<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Review extends Model
{
  use HasFactory;
  protected $table = 'reviews';

  protected $fillable = [
      'R_id','R_skor', 'R_deskripsi'
  ];
  
  protected $primaryKey = 'R_id';
}