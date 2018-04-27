<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //index create store show edit update delete
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resources.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {

        $posts = Post::all()->sortByDesc("created_at");
        return view('page\post\posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view("page.post.createpost");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post=new \App\Post;
        $post->body=$request->input('asdbody');
        $post->title=$request->input('asdtitle');
        $post->user_id=auth()->user()->id;
        $post->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id',$id)->first();
        return view('page.post.post',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($postid)
    {
        $editpost = Post::where('id',$postid)->get();
        return view('page.post.editpost')->with('editpost',$editpost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update($postid,Request $request){
        $this->validate($request,[
            'asdbody'=>'required',
            'asdtitle'=>'required'
        ]);
        $updatedpost = Post::where('id',$postid)->first();
        $updatedpost->body = $request->input('asdbody');
        $updatedpost->title = $request->input('asdtitle');
        $updatedpost->updated_at = now();
        $updatedpost->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($postid)
    {
        $delpost = Post::where('id',$postid)->first();
        $delpost->delete();
        return redirect()->back();
    }

    public function spectouser($userid){
        $userposts = \App\Post::where('user_id',$userid)->get();
        return view('page\post\myposts',compact('userposts'));
    }
}
