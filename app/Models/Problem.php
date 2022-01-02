<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Problem extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $fillable = [
        'name',
        'user_id',
        'city_id',
        'problem_destination_id',
        'status',
        'reason_id',
        'tools',
        'causing',
        'description'
    ];

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function city(){
        return $this->belongsTo(City::class , 'city_id');
    }

    public function problem_destination(){
        return $this->belongsTo(Problem_Destination::class , 'problem_destination_id');
    }

    public function reason(){
        return $this->belongsTo(Reason::class , 'reason_id');
    }

    public function attachment(){
        return $this->hasMany(Attachment::class, 'problem_id');
    }

    public function comment(){
        return $this->hasMany(Comment::class , 'problem_id');
    }

    public function rate(){
        return $this->hasMany(Rate_problem::class , 'problem_id');
    }
}
