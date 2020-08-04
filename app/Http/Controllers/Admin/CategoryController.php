<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course\Category;

class CategoryController extends Controller
{
    public function create(Request $request){
        $category =  new Category();
        $category->name = $request->name;
        $category->is_active = $request->is_active;
        $category->save();

        return redirect('admin/categories');
    }

    public function update($id,Request $request){
        $category =  Category::find($id);
        $category->name = $request->name;
        $category->is_active = $request->is_active;
        $category->save();

        return redirect('admin/categories');
    }

    public function delete($id){
        $category =  Category::find($id);
        $category->delete();

        return redirect('admin/categories');
    }

    public function get($id){
        $category =  Category::find($id);

        return view('admin.category_detail')->with('category', $category);
    }

    public function all(){
       $categories = Category::paginate(10);

       return view('admin.categories')->with('categories', $categories);
    }
}
