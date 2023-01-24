<?php

namespace App\Http\Controllers;

use App\Http\Requests\categoryRequest ;
use App\Models\Categories;
use Illuminate\Http\Request;


class CategoriesController extends Controller
{
    public function index()
    {
         $cats = Categories::with('items')->orderBy('code', 'asc')->get();
         return view('categories', compact('cats'));
        
    }
    
    public function create()
    {
        //
    }
    public function store(categoryRequest $request)
    {
        $data = new Categories();
        $data->name = $request->name;
        $data->code = $request->code;
       

        $data->save();
        return redirect('/category')->with('success', 'Category Added Sucessfully');
    }

  
    public function show($id)
    {
        $data = Categories::findOrFail($id);
        return view('category-details', compact('data'));
    }
    public function edit($id)
    {
        //
    }
    public function update(categoryRequest $request, $id)
    {
        $data = Categories::findOrFail($id);
        $data->name = $request->name;
        $data->code = $request->code;
        $data->save();

        return redirect('/categories')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        Categories::destroy($id);
        return redirect('/categories')->with('success', ' deleted successfully');
    }
    public function pages()
    {
        return view('pages');
    }
}
