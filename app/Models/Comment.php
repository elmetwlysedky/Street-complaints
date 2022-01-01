<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['user_id', 'problem_id', 'content', 'file'];

    public function user()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    public function problem(){
        return $this->belongsTo(Problem::class , 'problem_id');
    }


}
