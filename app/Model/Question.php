<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $table ='questions';
    protected $fillable =[
        'title',
        'slug',
        'body',
        'user_id',
        'category_id'
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function user()
    {
        return $this->belongTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
