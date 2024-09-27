<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tdMasuk extends Model
{
    use HasFactory;
    protected $fillable = ['idMasuk','kdMasuk','kdBarangBeli','jumlah','subTotal'];
}