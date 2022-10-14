@extends('layouts.app')

@section('title', '一覧')

@section('css-link')
    <link rel="stylesheet" href=" {{ asset('/css/list.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/post.css') }} ">
@endsection

@section('content')

    <div class="link-btn-container">
        <a href=" {{ url('/post?list_page=' .$page) }} ">
            <button>投稿する</button>
        </a>
    </div>

    <div class="pagination-container">
        {{ $posts->links(); }}
    </div>

    <div id="posts-container">
        @for($i=0; $i<$posts->count(); $i++)
            <x-post :post='$posts[$i]' :page='$page'></x-post>
        @endfor
    </div>

    <div class="pagination-container">
        {{ $posts->links(); }}
    </div>


    <script src=" {{ asset('/js/post-menu.js') }} "></script>
    <script src=" {{ asset('/js/confirm-delete.js') }} "></script>
@endsection