<?php

namespace App\Models\Purchase;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use SoftDeletes;

    protected $table = "purchase";
    protected $fillable = [
      'by_who_id', // user_id bilgisi gelecek
      'to_who_id', // user_id bilgisi gelecek
      'course_id',
      'price',
      'is_confirmed',
    ];

    public $timestamps = true;
}
