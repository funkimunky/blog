<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    # fill in guarded array with fields that cannot be mass created leave blank to allow all
    protected $guarded = [];
    #protected $fillable = ['id', 'title', 'category_id', 'excerpt', 'body'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
