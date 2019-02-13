<?php

namespace App;

use App\Product;

class Seller extends User
{
	// One to many
    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}
