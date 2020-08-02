<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
  use SoftDeletes;

  protected $table = "sub_category";
  protected $fillable = [
    'category_id',
    'name',
    'is_active'
  ];

  public $timestamps = true;
}
