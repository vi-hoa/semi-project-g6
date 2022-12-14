<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public $table ="slide";

    public $primaryKey = 'id';

    public $fillable = [

    'describe' , 'name','image',

    ];
    use HasFactory;
}
