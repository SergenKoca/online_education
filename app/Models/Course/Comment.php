<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
  use SoftDeletes;

  protected $table = "comment";
  protected $fillable = [
    'course_id',
    'user_id',
    'content'
  ];

  public $timestamps = true;
}
