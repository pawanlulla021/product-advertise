<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $guarded = [];  
    //protected $fillable =['title','completed','user_id','description'];
    
    public function user() {
       return  $this->belongsTo('App\Models\User');
    }

}
