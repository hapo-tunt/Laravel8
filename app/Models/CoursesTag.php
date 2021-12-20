<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesTag extends Model
{
    use HasFactory;

    protected $table = 'courses_tag';

    protected $fillable = [
        'courses_id',
        'tags_id',
    ];
}
