<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $fillable = ['name',];

    public function user(){
    return $this->hasMany(User::class , 'city_id');
    }

    public function problem(){
        return $this->hasMany(Problem::class , 'city_id');
    }
}
