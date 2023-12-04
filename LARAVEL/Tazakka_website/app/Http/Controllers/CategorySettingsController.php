<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategorySettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.setCategory',[
            'category' => Category::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //  validasai form add Categories
         $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
            'slug' => 'required|unique:categories'
        ]);
        
        Category::create($validatedData);
        return redirect('/dashboard/category')->with('success','categories has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return $category; 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // mengarahkan ke edit
        return view('dashboard.CategoryEdit',[
            'category'=>$category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // Validasi data
        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories,slug,' . $category->id
        ];
    
        // Cek apakah slug-nya sama
        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories,slug';
        }
    
        // Kumpulkan dalam data yang sudah divalidasi
        $validatedData = $request->validate($rules);
    
        // Subquery UPDATE
        Category::where('id', $category->id)->update($validatedData);
    
        return redirect('/dashboard/category')->with('success', 'Category has been updated');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
      Category::destroy($category->id);
      return redirect('/dashboard/category')->with('success','category has been deleted');
    }
}
