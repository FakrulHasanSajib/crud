<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['name', 'details'];

    // Define any relationships or additional methods here if needed
    // For example, if you have a relationship with categories:
    // public function categories()
    // {
    //     return $this->belongsToMany(Category::class);
    // }
}
