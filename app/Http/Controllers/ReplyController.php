<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Reply;
use App\Http\Requests\AddReplyRequest;


class ReplyController extends Controller
{
    public function index(Request $request)
    {
        $post = Post::find($request->id);
        $replies = Reply::where("post_id", $request->id)->get();

        if(empty($_GET["list_page"]))
        {
            $_GET["list_page"] = 1;
        }

        $data = [
            "post" => $post,
            "replies" => $replies,
            "list_page" => $_GET["list_page"]
        ];

        return view('reply.index', $data);
    }

    public function add(AddReplyRequest $request)
    {
        $reply = new Reply;
        $reply->post_id = $request->id;
        $reply->maker = $request->name;
        $reply->text = $request->text;
        $reply->save();

        return redirect('/reply/' .$request->id. '?list_page=' .$request->list_page);
    }

}
