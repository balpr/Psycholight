<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Blog;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index(){
        $authors = Author::get();
        $blogs = Blog::get();
        $categories = Category::get();
        return view('admin.index', compact(['authors', 'blogs', 'categories']));
    }

    public function show(){
        $blogs = Blog::orderByDESC('updated_at')->where('is_published', 1)->get();
        return view('blogs', compact('blogs'));
    }
}
