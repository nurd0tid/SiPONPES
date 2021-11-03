<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use DataTables;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (request()->ajax()) {
        //     return DataTables::of(Blog::query())->make(true);
        // }
        return view('admin.blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug'  => 'required|unique:blogs',
            'category_id'  => 'required',
            'status'  => 'required',
            'image'  => 'image|file|max:1024',
            'tags'  => 'required',
            'content'  => 'required',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('article-images');
        }

        $validateData['user_id'] =  auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->content), 150, '...');

        Blog::create($validateData);
        return redirect('/main/blog')->with('success', 'New Article has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        Blog::destroy($blog->id);
        return redirect('/main/blog')->with('warning', 'Article has been deleted!');
    }

    public function json()
    {
        $blog = Blog::all();

        return DataTables::of($blog)
            ->addColumn('action', function ($blog) {
                return '
                <form action="/main/blog/' . $blog->slug . '" method="post">
                    ' . csrf_field() . '
                    ' . method_field("DELETE") . ' 
                    <a href="/main/blog/' . $blog->slug . '" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                    <a href="/main/blog/' . $blog->slug . '/edit" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>                           
                    <button class="btn btn-sm btn-danger" onclick="return confirm("Are you sure?")"><i class="fas fa-trash"></i></button>
                </form>';
            })
            ->make(true);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        return response()->json([
            'slug' => $slug
        ]);
    }
}
