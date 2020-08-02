<?php

namespace App\Models\Course;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = "category";
    protected $fillable = [
      'name',
      'is_active'
    ];

    public $timestamps = true;

    public function subCategory(){
       return $this->hasMany('App\Models\Course\SubCategory','category_id','id');
    }
}
