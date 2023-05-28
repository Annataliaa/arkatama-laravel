<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_products extends Model
{
    use HasFactory;
    protected $table = "list_products";
    protected $fillable = [
        'name',
        'categories_id',
        'price',
    ];

    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
}