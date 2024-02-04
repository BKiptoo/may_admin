<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'tags',
        'description',
        'photo',
    ];

    // Define relationships
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
