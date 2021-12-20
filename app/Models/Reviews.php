<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'users_id',
        'times',
        'star_rate',
        'message',
        'type',
        'target_id',
    ];

    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
