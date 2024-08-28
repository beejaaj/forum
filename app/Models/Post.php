<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'rates'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ratings(){
        return $this->hasMany(Rate::class);
    }
}
