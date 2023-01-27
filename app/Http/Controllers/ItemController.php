<?php

namespace App\Http\Controllers;

use App\Http\Requests\itemRequest ;
use App\Models\item;
use Illuminate\Http\Request;


class itemController extends Controller
{
    public function index()
    {
         $item = item::get();
         return view('items', compact('item'));
        
    }
    
    public function create()
    {
        return view('itemadd');
    }
    public function store(Request $request)
    {
        $data = new item();
        $data->name = $request->name;
        $data->category_id = $request->category_id;
        $data->limit = $request->limit;
        $data->save();
        return redirect('/Items')->with('success', 'Items Added Sucessfully');
    }

  
    public function show($id)
    {
        //
    }
   
    public function update(itemrequest $request, $id)
    {
        $data = item::findOrFail($id);
        $data->name = $request->name;
        $data->limit = $request->limit;
        $data->save();

        return redirect('/items')->with('success', 'item updated successfully');
    }

    public function destroy($id)
    {
        item::destroy($id);
        return redirect('/items')->with('success', ' deleted successfully');
    }

}
