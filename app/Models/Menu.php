<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['menu_name', 'category_id', 'price', 'type'];

    // Relasi ke Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
