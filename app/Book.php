<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Support\CustomQueryBuilder;

class Book extends Model
{
    protected $fillable = ['name', 'publishedDate', 'category_id', 'user_id'];

    use CustomQueryBuilder;

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
