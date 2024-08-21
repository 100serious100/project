<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $post = Post::where('is_published','=',1)->get();
        // // dump($post->title);
        // foreach($post as $line){
        //     dump($line->title);
        // }
        // dd('end');

        $category = Category::find(1);
        $post = Post::find(1);
        dd ($post->category);



        //return view('post.index',compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show',compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit',compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
        //восстановление из мусорки
        //$post = Post::withTrashed()->find(2);
        //$post->restore();
    }

    //firstOrCreate
    //updateOrCreate

    public function firstOrCreate()
    {
        $array =
        [
            'title' => 'firstOrCreate',
            'content' => 'firstOrCreate',
            'image' => 'firstOrCreate',
            'likes' => 300,
            'is_published' => 0,
        ];
        $post = Post::firstOrCreate(
        [
            'title' => 'firstOrCreate',
        ],$array);
        dump ($post->title);
        dd('finish');
    }

    public function updateOrCreate()
    {
        $array = 
        [
            'title' => 'title of post',
            'content' => 'updateOrCreate',
            'image' => 'updateOrCreate',
            'likes' => 300,
            'is_published' => 0,
        ];
        $post = Post::updateOrCreate(
        [
            'title' => 'title of post',
        ],$array);
        dump ($post->title);
        dd('finish');
    }
}
