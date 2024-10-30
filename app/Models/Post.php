<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ratings(){
        return $this->hasMany(Rate::class);
    }

    //Relacionamento polimórfico 1-1
    public function postable(){
        return $this->morphTo();
    }
    /*public function topic(){
        return $this->hasOne(Topic::class);
    }

    public function comment(){
        return $this->hasOne(Commentary::class);
    }*/
}
