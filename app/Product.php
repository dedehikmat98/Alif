<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','nama_product', 'bahan','warna','ukuran','cover'];

}
