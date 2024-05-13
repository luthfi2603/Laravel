<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;


class PostController extends Controller {
    public function index(){
        // dd(request('search'));
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' .$category->name;
        }else if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' .$author->name;
        }
        return view('posts', [
            "title" => "All Posts" .$title,
            "active" => "posts",
            // "posts" => Post::all() // menggunakan class Post yang ada di dalamnya fungsi buatan all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            // "post" => Post::find($slug) // menggunakan class Post yang ada di dalamnya fungsi buatan find()
            "post" => $post
        ]);
    }

    public function createTest(){
        return view('test');
    }
    
    public function storeTest(){
        return response()->json(['test' => true]);
        dd(true);
    }
    
    public function storeTest2(){
        return response()->json(['test' => true]);
        dd(true);
    }
}