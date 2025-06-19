<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class obatan extends Model
{
    use HasFactory;
    protected $table = 'obatans';
    protected $fillable = ['nama', 'stok','harga','gambar'];
}
