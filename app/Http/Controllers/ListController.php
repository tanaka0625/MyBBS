<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ListController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);

        if(empty($_GET["page"]))
        {
            $page = 1;
        }else{
            $page = $_GET["page"];
        }

        $data = [
            "posts" => $posts,
            "page" => $page

        ];


        return view('list.index', $data);
    }
}
