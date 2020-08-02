<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
  use SoftDeletes;

  protected $table = "section";
  protected $fillable = [
    'course_id',
    'name',
    'description',
    'is_active'
  ];

  public $timestamps = true;

  public function lessons(){
     return $this->hasMany('App\Models\Course\Lesson','section_id','id');
  }
}
