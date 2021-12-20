<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $fillable = [
        'name',
    ];

    public function courses()
    {
        return $this->belongsToMany(Courses::class, 'courses_tag', 'tags_id', 'courses_id');
    }
}
