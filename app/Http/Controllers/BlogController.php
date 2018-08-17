<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;


class BlogController extends Controller
{

    public function getIndex(){
            $posts= Post::paginate(10);

            return view('blog.index')->withPosts($posts);
 }

    public function getSingle($slug){
                //fetch from the database on the slug

                $post=Post::where('slug', '=', $slug)->first(); //we could use get() but first is faster

                return view('blog.single')->withPost($post);

                //return the view and pass in the post object

    }
   
    
}
