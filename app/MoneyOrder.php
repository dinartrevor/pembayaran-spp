<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoneyOrder extends Model
{
     protected $fillable = ['year','nominal'];

     public function student(){
    	return $this->hasMany(Student::class);
    }
    public function transaction(){
    	return $this->hasMany(Transaction::class);
    }
}
