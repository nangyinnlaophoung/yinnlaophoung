<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     protected $fillable = [
        'codeno','name','photo','price','discount','description','subcategory_id','brand_id'
    ];
     public function brand($value=''){
    	return $this->belongsTo('App\brand');
    }
     public function subcategory($value=''){
    	return $this->belongsTo('App\Subcategory');
    }
}
