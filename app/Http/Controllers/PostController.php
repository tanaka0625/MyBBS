<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\AddPostRequest;

class PostController extends Controller
{
    public function index()
    {
        if(empty($_GET["list_page"]))
        {
            $_GET["list_page"] = 1;
        }

        $data = [
            "list_page" => $_GET["list_page"]
        ];
        return view("Post.index", $data);
    }

    public function add(AddPostRequest $request)
    {
        $name = $request->name;
        $text = $request->text;

        $post = new Post;
        $post->maker = $name;
        $post->text = $text;
        $post->save();

        return redirect('/');
    }

    public function delete(Request $request)
    {
        Post::where("id", $request->id)->delete();
        return redirect('/?page=' .$request->list_page);
    }

}
