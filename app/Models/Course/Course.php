<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
  use SoftDeletes;

  protected $table = "course";
  protected $fillable = [
    'instructor_id',
    'name',
    'description',
    'price'
    'score',
    'is_active'
  ];

  public $timestamps = true;

  public function sections(){
     return $this->hasMany('App\Models\Course\Section','course_id','id');
  }

  public function comments(){
    return $this->hasMany('App\Models\Course\Comment','course_id','id');
  }
}
