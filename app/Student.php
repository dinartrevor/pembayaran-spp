<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nisn','nis','name','email','password','phone_number','address','grade_id','money_order_id'];

    public function grade(){
    	return $this->belongsTo(Grade::class);
    }
    public function moneyOrder(){
    	return $this->belongsTo(MoneyOrder::class);
    }
    public function transaction(){
    	return $this->hasMany(Transaction::class);
    }
}
