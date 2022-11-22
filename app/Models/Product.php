<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey ="product_id";
    public $timestamps = false;
    protected $table = "product";
    public function category(){
        return $this ->belongsTo('App\Models\Category','category_id');
    }
}
