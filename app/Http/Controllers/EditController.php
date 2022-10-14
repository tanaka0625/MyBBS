<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\AddPostRequest;

class EditController extends Controller
{
    public function index(Request $request)
    {
        $post = Post::find($request->id);

        if(empty($_GET["list_page"]))
        {
            $_GET["list_page"] = 1;
        }

        $data = [
            "post" => $post,
            "list_page" => $_GET["list_page"]
        ];

        return view('edit.index', $data);
    }

    public function update(AddPostRequest $request)
    {
        $post = Post::find($request->id);
        $post->text = $request->text;

        $post->save();
        return redirect('/?page=' .$request->list_page);

    }
}
