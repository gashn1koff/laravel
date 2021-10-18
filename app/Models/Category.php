<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;
    protected $guarded = ['updated_at', 'created_at'];
    use HasFactory;

    public function products(){
        return $this->belongsToMany(Product::class, 'products_categories', 'c_id', 'p_id');
    }
}
