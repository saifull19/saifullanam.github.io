<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    //
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        // $posts = ;

        // mlakukan search
        // if (request('search')) {
        //     $posts->where('title', 'like', '%' . request('search') . '%')->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        return view('posts', [

            "title" => "All Posts" . $title,
            // memberikan class active pada menu navbar
            "active" => "posts",
            // menampilkan semua postingan
            // "posts" => Post::all()   

            // menampilkan semua postingan berdasarkan postingan yang terbaru berada di awal postingan atau atas sendiri
            // with == untuk performa dan fiilter untuk searching
            // paginate == untuk tidak menampilkan semua data pengganti get
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)

        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            "post" => $post
        ]);
    }
}
