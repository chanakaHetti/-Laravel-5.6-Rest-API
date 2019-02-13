<?php

namespace App;

use App\Buyer;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
    	'quantity',
    	'buyer_id',
    	'product_id'
    ];

    // Many to one
    public function buyer()
    {
    	return $this->belongsTo(Buyer::class);
    }

    // Many to one
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
