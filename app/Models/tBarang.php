<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tBarang extends Model
{
    use HasFactory;
    protected $fillable = ['kdBarang','namaBarang','satuan','hargaJual','hargaBeli','stok','status'];
}
