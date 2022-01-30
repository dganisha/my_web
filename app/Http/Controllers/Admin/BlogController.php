<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{

    public function create_view($id = null)
    {
        if($id == null){
            return view('admin.blog.create');
        }
    }

    public function create(Request $request)
    {

        if(!isset($request->blog_id)){
            $blog = new Blog();
        }else{
            $blog = Blog::find($request->blog_id);
        }
        $blog->author_id = 1;
        $blog->title = $request->judul;
        $blog->content = $request->konten;
        $blog->url_slug = time() . '-'. str_replace(' ', '-', strtolower($request->judul));
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time(). rand(1111,9999) .'.'.$image->getClientOriginalExtension();
            $path = "/images/";
            $destinationPath = public_path($path);
            $image->move($destinationPath, $name);

            $pathIcon = $path . $name;
            $blog->path_image = $pathIcon;
        }
        $blog->save();
        return redirect()->back();
    }

    /*
    *
    * CLIENT SIDE
    *
    */

    public function client_index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();

        return view('blog.index', compact('blogs'));
    }

    public function client_detail($slug)
    {
        $blog = Blog::where('url_slug', $slug)->first();
        if(!$blog){
            return redirect('/blog');
        }

        return view('blog.detail', compact('blog'));
    }
}
