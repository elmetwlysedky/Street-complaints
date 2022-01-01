<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog_comment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $fillable = [
        'blog_id',
        'user_id',
        'comment',
    ];

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function blog(){
        return $this->belongsTo(Blog::class , 'blog_id');
    }
}
