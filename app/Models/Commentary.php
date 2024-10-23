<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentary extends Post
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    public function topic(){
        return $this->belongsTo(Topic::class);
    }

    public function post(){
        return $this->morphOne(Post::class, 'postable');
        //return $this->belongsTo(Post::class);
    }
}
