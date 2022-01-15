<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts()
    {
        // menghubungkan category dg model post === dg relasi 1 categori bisa dimiliki oleh banyak post
        return $this->hasMany(Post::class);
    }
}
