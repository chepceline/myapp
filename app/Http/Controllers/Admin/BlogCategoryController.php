<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\BlogCategory;
use Illuminate\Http\Request;


class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=[];
        $data['categories'] =BlogCategory::all();

        return view ('admin.pages.blog_categories.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.pages.blog_categories.create',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'description'=>'required|string'
        ]);
        BlogCategory::query()->create($request->all());

        return redirect()->route('admin.categories.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = BlogCategory::query()->find($id);

        return view('admin.pages.blog_categories.edit',['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        $category = BlogCategory::query()->find($id);
        $category->update($request->all());

        return redirect()->route('admin.categories.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
