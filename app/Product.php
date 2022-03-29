<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
    use SearchableTrait;
    
    protected $searchable = [
        'columns' => [
            'products.product_name' => 10,
            'products.product_code' => 5,
        ],
    ];

    protected $fillable = [
    'category_id','brand_id','product_name','product_slug','product_code','product_quantity','short_description','long_description','price','image_one','image_two','image_three','status',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
