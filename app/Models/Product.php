<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'category_id', 'photo'];


    public function getPriceAttribute(){
        return intval($this->attributes['price'] / 10).' руб';
    }


    public function getpagePhotoAttribute(){
        if(Storage::exists($this->attributes['photo'])){
            return Storage::url($this->attributes['photo']);
        }
        return 'https://www.brandbuilders.io/wp-content/uploads/2016/06/low_price_tag-01.png';
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'products_categories', 'p_id', 'c_id');
    }


}
