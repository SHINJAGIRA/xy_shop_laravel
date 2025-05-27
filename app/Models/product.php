<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=[
        'productname'
    ];
    public function productIn(){
        return $this->hasOne(ProductIn::class);
    }
}
