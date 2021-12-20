<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersCourses extends Model
{
    use HasFactory;

    protected $table = 'users_courses';

    protected $fillable = [
        'users_id',
        'courses_id',
        'student_join',
    ];
}
