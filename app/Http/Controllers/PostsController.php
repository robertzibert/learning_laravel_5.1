<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Jobs\PublishPost;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;

use Gate;

//We want to see the current user saving posts
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest as PostRequest;

class PostsController extends Controller
{


    public function __construct(){

      $this->middleware('auth', ['only' => 'create']);
      

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::latest('published_at')->published()->get();
      return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tags = Tag::lists('name','id');
      return view('posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {

        $job = new PublishPost($request->all(), $request->input('tags'));

        $this->dispatch($job);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $post = Post::findOrFail($id);

      return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $post = Post::findOrFail($id);

      if(Gate::denies('update', $post)){
        abort(404, 'Nope');
      }

      $tags = Tag::lists('name','id');



      return view('posts.edit', compact('post', 'tags'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
      $post = Post::findOrFail($id);

      $input = $request->all();

      $post->update($input);



      return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::findOrFail($id);

      $post->destroy();

      return redirect('posts');
    }
}
