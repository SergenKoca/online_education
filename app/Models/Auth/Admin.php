<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admin extends Model
{
  use SoftDeletes;
  protected $table = "admin";
  protected $fillable = [
    'user_id',
    'is_active'
  ];

  public $timestamps = true;
}
