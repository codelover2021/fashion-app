<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable= [
        'brand',
        'size',
        'hell_height',
        'price',
        'images',
        'category_id',
        'user_id',
        'designer',
        'status'
        ];
   public function user() {

       return $this->belongsTo(User::class,'user_id');
   }
   public function category(){

      return $this->belongsTo(Category::class,'category_id');

   }

}
