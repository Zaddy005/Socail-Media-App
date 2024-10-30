<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // $this->validate([
            // 'image'=>'required|image|mimes:jpg,png,jpeg',
            // 'title'=>'required',
            // 'content'=>'required'
        // ]);

        $request->validate([
            'title'=>'required',
            'content'=>'required'
        ]);


        $user = Auth::user();
        $user_id = $user->id;

        $post = new Post();
        $post->title = $request['title'];
        $post->content = $request['content'];
        $post->slug = Str::slug($request['title']);
        $post->user_id = $user_id;

        $post->save();
        return redirect()->back();
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
