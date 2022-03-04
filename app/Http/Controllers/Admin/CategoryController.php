<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.categories.index')->only('index');
        $this->middleware('can:admin.cotegories.destroy')->only('destroy');
        $this->middleware('can:admin.cotegories.create')->only('create','store');
        $this->middleware('can:admin.cotegories.edit')->only('edit','update');

    }
  
    public function index()
    {
        $categories=Category::all();
        return view('admin.categories.index',compact('categories'));
    }

   
    public function create()
    {
        return view('admin.categories.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>'required|unique:categories'
        ]);
        
       $category= Category::create($request->all());

       return redirect()->route('admin.categories.edit',$category)->with('info','La categoria se creo con exito');
    }

  
    
    public function edit(Category $category)
    {
        return view('admin.categories.edit',compact('category'));
    }

    
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>"required|unique:categories,slug,$category->id"
        ]);

        $category->update($request->all());
        return redirect()->route('admin.categories.edit',$category)->with('info','La categoria se actualio con exito');
    }

  
    public function destroy(Category $category)
    {
        $category->delete();
       return redirect()->route('admin.categories.index')->with('info','La categoria se elimino con exito');
    }
}
