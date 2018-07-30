<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class list_image extends Model
{
    protected $table = "list_images";

    protected $fillable = [
    	'product_id' , 'image', 'total' , 'color'
    ];

    public function products()
    {
    	return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
}
