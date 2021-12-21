<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserLesson extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'users_lessons';

    protected $fillable = [
        'users_id',
        'lessons_id',
    ];
}
