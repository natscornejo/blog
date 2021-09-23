<?php

namespace App\Http\Controllers;

use Session;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view ('posts.index')->with('posts',$posts);
    }

    public function create()
    {
        return view ('posts.create');
    }


    public function store(Request $request)
    {
        $post = new Post;

        //Obligatorio
        $post->title = $request->title;
        $post->body = $request->body;

        //Opcional - de acuerdo a lo que pusimos
        $post->author = $request->author;
        $post->date = $request->date;
        $post->keywords = $request->keywords;

        $post->save();

        //envia todo
        /*dd($request->all());*/

        Session:: flash ('success', 'Submitted successfully');

        return redirect()->back();
    }

    public function show(Post $post)
    {
        return view ('posts.show');
    }


    public function edit(Post $post)
    {
        return view ('posts.edit');
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();


        Session:: flash ('delete', 'Successfully removed');

        return redirect()->back();
    }
}
