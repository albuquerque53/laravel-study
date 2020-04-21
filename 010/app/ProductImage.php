<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'products_images';
    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
