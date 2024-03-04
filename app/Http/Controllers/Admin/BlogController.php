<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogStoreRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::get();

        return view('admin.components.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.components.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogStoreRequest $request)
    {
   

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imgName = 'BlogPhoto- '.md5(uniqid()).'.'.$img->getClientOriginalExtension();
            $img_url = "backend/assets/uploads/{$imgName}";
            $img->move(public_path('backend/assets/uploads'), $img_url);
        }

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'img' => $img_url,
            'body' => $request->body,

        ]);
        $notification = [
            'message' => 'Blog Created Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('admin.blogs.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $blogs = Blog::get();

        return view('admin.components.blog.show', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return response()->json($blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imgName = 'BlogPhoto- ' . md5(uniqid()) . '.' . $img->getClientOriginalExtension();
            $img_url = "backend/assets/uploads/{$imgName}";
            $img->move(public_path('backend/assets/uploads'), $img_url);
            //delete file:
            $filePath = $request->$img_url;
            File::delete($filePath);
            $blog->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'img' => $request->img_url,
                'body' => $request->body,
            ]);
           
        }else{
            $blog->update([
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'body' => $request->body,
            ]);
        }
        $notification = [
            'message' => 'Blog Updated Successfully',
            'alert-type' => 'success',
        ];

         return redirect()->route('admin.blogs.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        
        File::delete($blog);
        $blog->delete();

        return response()->json([
            'status' => true,
            'message' => 'Blog Deleted Successfully',
        ]);

    }
}
