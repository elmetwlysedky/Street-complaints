<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rate_problem extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [ 'problem_id', 'rate', 'item_id','comment'];

    public function problem(){
        return $this->belongsTo(Problem::class , 'problem_id');
    }

    public function item(){
        return $this->belongsTo(Item::class , 'item_id');
    }
}
