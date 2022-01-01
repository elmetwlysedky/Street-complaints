<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Problem_destination extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "problem_destinations";
    protected $dates=['deleted_at'];
    protected $fillable = ['name'];

    public function problem(){
        return $this->hasMany(Problem::class , 'problem_destination_id');
    }
}
