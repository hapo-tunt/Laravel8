<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    protected $table = 'lessons';

    protected $fillable = [
        'courses_id',
        'title',
        'description',
        'requirments',
        'times',
    ];

    public function users(){
        return $this->belongsToMany(Users::class, 'users_lessons', 'lessons_id', 'users_id');
    }

    public function documents()
    {
        return $this->hasMany(Documents::class);
    }

    public function courses()
    {
        return $this->belongsTo(Courses::class);
    }
}
