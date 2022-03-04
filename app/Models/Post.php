<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=['id','created_at','updated_at'];

    //relacion uno amucho inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    //post rweacion muchos a muchis

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //relacion uno a uno plimrofica

    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
