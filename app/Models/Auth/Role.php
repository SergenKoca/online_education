<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
  use SoftDeletes;
  protected $table = "role";
  protected $fillable = [
    'name',
    'is_active'
  ];

  public $timestamps = true;
}
