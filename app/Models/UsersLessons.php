<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersLessons extends Model
{
    use HasFactory;

    protected $table = 'users_lessons';

    protected $fillable = [
        'users_id',
        'lessons_id',
    ];
}
