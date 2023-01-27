<?php

namespace App\Http\Controllers;

use App\Http\Requests\categoryRequest ;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    public function index()
    {
         $category = Category::get();
         return view('categories', compact('category'));
        
    }
    
    public function create()
    {
        return view('cateadd');
    }
    public function store(Request $request)
    {
        $data = new Category();
        $data->name = $request->name;
        $data->code = $request->code;
        $data->save();
        return redirect('/categories')->with('success', 'Category Added Sucessfully');
    }

  
    public function show($id)
    {
        //
    }
   
    public function update(categoryRequest $request, $id)
    {
        $data = Category::findOrFail($id);
        $data->name = $request->name;
        $data->code = $request->code;
        $data->save();

        return redirect('/categories')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('/categories')->with('success', ' deleted successfully');
    }

}
