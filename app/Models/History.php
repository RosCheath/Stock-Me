<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    public $fillable = [
       'product_id','category_id'
    ];

    public function category_history()
    {
        return $this->belongsTo(Category::class);
    }

    public function product_history()
    {
        return $this->belongsTo(Product::class);
    }
}
