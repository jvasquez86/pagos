<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {

        //$posts = DB::table('posts')->get();
        $posts = Post::get();

        return view('blog', ['posts' => $posts]);
    }

    public function detalle(Post $id)
    {

        // $result = Post::find($id);
        //return $id;
        return view('posts.detalle', ['resultado' => $id]);
    }

    public function crear()
    {
        return view('posts.crear');
    }

    public function store(Request $request)
    {
        $post = new Post;

        $post->title = $request->input('titulo');
        $post->cuerpo = $request->input('cuerpo');
        $post->save();

        return redirect()->route('blog');
    }
}
