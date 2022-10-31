<?php

namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
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
        return view('posts.crear', ['resultado' => new Post]);
    }

    public function store(SavePostRequest $request)
    {
        /* $validate = $request->validate([
            'titulo' => ['required', 'min: 4'],
            'cuerpo' => ['required']
        ]);*/

        Post::create($request->validated());

        /* $post = new Post;

        $post->title = $request->input('titulo');
        $post->cuerpo = $request->input('cuerpo');
        $post->save();*/

        //  session()->flash('status', 'Post Creado');

        return to_route('blog')->with('status', 'Post creado!!');
    }

    public function editar(Post $id)
    {
        return view('posts.editar', ['resultado' => $id]);
    }

    public function actualiza(SavePostRequest $request, Post $id)
    {
        // return view('posts.editar', ['resultado' => $id]);
        //return $id;

        /* $validate = $request->validate([
            'titulo' => ['required', 'min: 4'],
            'cuerpo' => ['required']
        ]);*/



        $id->update($request->validated());

        /* $post = new Post;

        $post->title = $request->input('titulo');
        $post->cuerpo = $request->input('cuerpo');
        $post->save();*/

        //session()->flash('status', 'Post Actualizado');

        return to_route('blog')->with('status', 'Registro actualizado');
    }

    public function eliminar(Post $id)
    {
        $id->delete();

        return to_route('blog')->with('status', 'Registro eliminado');
    }
}
