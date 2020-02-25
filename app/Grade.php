<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
      protected $fillable = ['name','majors'];
      public function student(){
    	return $this->hasMany(Student::class);
    }
}
