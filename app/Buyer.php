<?php

namespace App;

use App\Transaction;

class Buyer extends User
{
	// One to many
    public function transactions() 
    {
    	return $this->hasMany(Transaction::class);
    }
}
