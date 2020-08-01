<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instructor extends Model
{
  use SoftDeletes;
  protected $table = "instructor";
  protected $fillable = [
    'user_id',
    'bio',
    'iban'
    'score',
    'is_active'
  ];

  public $timestamps = true;
}
