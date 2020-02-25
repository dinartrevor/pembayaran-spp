<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable= ['payment_number','pay_date','pay_month','status','pay_year','total_pay','user_id','student_id','money_order_id'];

    public function student(){
    	return $this->belongsTo(Student::class);
    }
    
    public function moneyOrder(){
    	return $this->belongsTo(MoneyOrder::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

}
