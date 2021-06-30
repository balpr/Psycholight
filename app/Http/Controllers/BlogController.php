<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Author;
use App\Models\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderByDESC('id')->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::get();
        return view('admin.blogs.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255'
        ]);

        $blog = new Blog;
        $blog->author_id = $request->author_id;
        $blog->title = $request->title;
        $blog->content = $request->content;
        if ($request->is_published == null) {
            $request->is_published = 0;
        }
        $blog->is_published = $request->is_published;

        if ($request->hasFile('picture')) {
            $file = $request->file('picture');
            $profileImage = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path() . '/blogimages/', $profileImage);
            $blog->picture = url('/blogimages/' . $profileImage);
        }

        $blog->save();

        return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $authors = Author::get();
        $categories = Category::get();
        return view('admin.blogs.edit', compact(['blog', 'authors', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if ($request->file('picture') != '') {
            $path = public_path() . '/blogimages/';

            if ($blog->picture != '' || $blog->picture != null) {
                $pic = substr($blog->picture, 33);
                $file_old = $path . $pic;
                unlink($file_old);
            }

            $file = $request->file('picture');
            $profileImage = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path() . '/blogimages/', $profileImage);
            $blogurl = url('/blogimages/' . $profileImage);
            $blog->update(['picture' => $blogurl]);
        }

        if ($request->is_published == null) {
            $request->is_published = 0;
        }
        $blog->is_published = $request->is_published;
        $blog->update(['is_published' => $blog->is_published]);

        blog::findOrFail($id)->update([
            'author_id' => $request->author_id,
            'title' => $request->title,
            'content' => $request->content,
        ]);
        $blog->categories()->attach($request->input('category'));

        return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        return redirect()->back();
    }
}
