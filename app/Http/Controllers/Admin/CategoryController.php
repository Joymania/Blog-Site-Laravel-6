<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    public function index()
    {
        $categories=\App\Model\User\Category::latest()->get();
        return view('backend.category.index',compact('categories'));
    }


    public function create()
    {
        return view('backend.category.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories'
        ]);
        \App\Model\User\Category::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'isActive'=>$request->isactive
        ]);
        $request->session()->flash('status', 'Category created Successfully.');
        return redirect('backend/category');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
              $category=\App\Model\User\Category::findOrFail($id);
              return view('backend.category.edit',compact('category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        \App\Model\User\Category::where('id',$id)->update([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'isActive'=>$request->isactive
        ]);
        $request->session()->flash('status', 'Category updated Successfully.');
        return redirect('backend/category');


    }


    public function destroy($id)
    {
         $category=\App\Model\User\Category::find($id);
         Session::flash('message','Category Deleted Successfully');
         $category->delete();
        return redirect('backend/category');
    }
}
