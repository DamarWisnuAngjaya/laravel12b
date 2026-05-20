<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    protected $fillable = ['title', 'description', 'status', 'priority', 'category_id'];

    protected $casts = [
        'status' => \App\Enums\Status::class,
        'priority' => \App\Enums\Priority::class,
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
