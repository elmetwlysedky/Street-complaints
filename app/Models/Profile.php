<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'about',
        'photo',
        'back_ground',
        'date_of_birth',
        'gender',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_is');
    }
}
