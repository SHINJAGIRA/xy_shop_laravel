<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductIn extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'datetime',
        'quantity',
        'unitprice',
        'totalprice'
    ];
    public function product(){
        return $this->belongsTo(product::class);
    }
    public function productOut(){
        return $this->hasMany(productOut::class);
    }
}
