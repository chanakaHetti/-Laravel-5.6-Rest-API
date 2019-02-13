<?php

namespace App;

use App\Seller;
use App\Category;
use App\Transaction;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	const AVAILABLE_PRODUCT = 'available';
	const UNAVAILABLE_PRODUCT = 'unavailable';

    protected $fillable = [
    	'name',
    	'description',
    	'quantity',
    	'status',
    	'image',
    	'seller_id'
    ];

    public function isAvailable() 
    {
    	return $this->status == Product::AVAILABLE_PRODUCT;
    }

    // Many to one
    public function seller()
    {
    	return $this->belongsTo(Seller::class);
    }

    // One to many
    public function transactions()
    {
    	return $this->hasMany(Transaction::class);
    }

    // Many to many
    public function categories()
    {
    	return $this->belongsToMany(Category::class);
    }
}
