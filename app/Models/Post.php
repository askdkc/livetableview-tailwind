<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public static function search($query)
    {
        return empty($query) ? static::query()
            : static::where('title', 'like', '%'.$query.'%')
                ->orWhere('body', 'like', '%'.$query.'%');
    }
}
