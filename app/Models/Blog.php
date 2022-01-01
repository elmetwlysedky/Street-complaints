<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $fillable = [
        'name',
        'photo',
        'description',
        'view',
    ];

    public function blog_comment(){
        return $this->hasMany(Blog_comment::class , 'blog_id');
    }
}
