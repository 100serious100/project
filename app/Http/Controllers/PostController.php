<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = Post::where('is_published','=',1)->get();
        // dump($post->title);
        foreach($post as $line){
            dump($line->title);
        }
        dd('end');
    }

    public function create(){
        $postsArr = [
            [
                'title' => 'title of post',
                'content' => 'interesting content',
                'image' => 'img.jpg',
                'likes' => 20,
                'is_published' => 1,
            ],
            [
                'title' => 'another title of post',
                'content' => 'another interesting content',
                'image' => 'another img.jpg',
                'likes' => 20,
                'is_published' => 1,
            ],
        ];
        foreach($postsArr as $item){
            Post::create($item);
        }
        dd('created');
    }

    public function update(){
        $post = Post::find(3);
        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 300,
            'is_published' => 0,
        ]);
        dd('updated');
    }
}
