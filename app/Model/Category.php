<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable =[
        'name',
        'slug',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
