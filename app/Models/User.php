<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'city_id',
    ];

    public function city(){
        return $this->belongsTo(City::class , 'city_id');
    }

    public function problem()
    {
        return $this->hasMany(Problem::class, 'user_id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }

    public function reply(){
        return $this->hasMany(Reply::class, 'user_id');
    }
    public function blog_comment(){
        return $this->hasMany(Blog_comment::class, 'user_id');
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
