<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['country','city','user_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
