<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
  use SoftDeletes;

  protected $table = "lesson";
  protected $fillable = [
    'section_id',
    'name',
    'file_path' // video veya pdf olabilir.
    'is_video'
    'is_active'
  ];

  public $timestamps = true;
}
