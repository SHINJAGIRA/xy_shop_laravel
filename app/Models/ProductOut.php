<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOut extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_in_id',
        'totalprice',
        'datetime',
        'quantity',
        'unitprice',
    ];
    public function productIn(){
        return $this->belongsTo(productIn::class);
    }
}
