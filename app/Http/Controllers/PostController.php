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

        return view('posts.detalle', ['resultado' => $id]);
    }

    public function crear()
    {
        return view('posts.crear');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => ['required', 'min: 4'],
            'cuerpo' => ['required']
        ]);

        $post = new Post;

        $post->title = $request->input('titulo');
        $post->cuerpo = $request->input('cuerpo');
        $post->save();

        session()->flash('status', 'Post Creado');

        return redirect()->route('blog');
    }

    public function editar(Post $id)
    {
        return view('posts.editar', ['resultado' => $id]);
    }

    public function actualiza(Post $id)
    {
       // return view('posts.editar', ['resultado' => $id]);
       return $id;
    }
}
