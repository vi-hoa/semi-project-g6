<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    public $primaryKey = 'product_id';
    public $timestamps = false;
    public function category()
    {
        return $this->belongsTo('App\Models\Category','category_id');
    }
    protected $filable = [
        'product_name','product_price','img', 'product_description','category_id'
    ];

    protected $primaryKey ="product_id";
    
    protected $table = "product";
    
    public function category(){
        return $this ->belongsTo('App\Models\Category','category_id');
    }
    protected $fillable =[
        'product_name','product_description','product_price','image','category_id'];
    public $timestamps = false;

}
