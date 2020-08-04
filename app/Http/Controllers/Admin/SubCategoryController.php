<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course\SubCategory;

class SubCategoryController extends Controller
{
  public function create(Request $request){
      $sub_category =  new SubCategory();
      $sub_category->category_id = $request->category_id;
      $sub_category->name = $request->name;
      $sub_category->is_active = $request->is_active;
      $sub_category->save();

      return redirect('admin/category/'.$request->category_id);
  }

  public function update($id,Request $request){
      $sub_category =  SubCategory::find($id);
      $sub_category->category_id = $request->category_id;
      $sub_category->name = $request->name;
      $sub_category->is_active = $request->is_active;
      $sub_category->save();

      return redirect('admin/category/'.$request->category_id);
  }

  public function delete($id){
      $sub_category =  SubCategory::find($id);
      $sub_category->delete();

      return redirect('admin/category/'.$request->category_id);
  }

  public function get($id){
      $sub_category =  SubCategory::find($id);

      return response()->json([ // json döndürmemin sebebi admin tarafında brtayı ajax ya da vue.js ile alacağım.
        'sub_category' => $sub_category
      ]);
  }

  public function all(){
     $sub_categories = SubCategory::paginate(10);


     return response()->json([ // json döndürmemin sebebi admin tarafında burayı ajax ya da vue.js ile alacağım.
       'sub_categories' => $sub_categories
     ]);


  }
}
