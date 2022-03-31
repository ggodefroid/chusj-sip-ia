<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory; 

    protected $fillable =['title'];

    public function image()
    {
        return $this->hasOne(Image::class);
    }
}
