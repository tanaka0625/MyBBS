@extends('layouts.app')

@section('title', '返信')

@section('css-link')
    <link rel="stylesheet" href=" {{ asset('/css/post.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/reply.css') }} ">
    <link rel="stylesheet" href=" {{ asset('/css/reply-page.css') }} ">

@endsection

@section('content')

    <div class="link-btn-container">
        <a href=" {{ url('/?page=' .$list_page) }} ">
            <button>戻る</button>
        </a>
    </div>

    <x-post :post='$post' :page="$list_page"></x-post>

    <form action=" {{ url('/reply/add') }} " method="post">
        @csrf

        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label for="name">投稿者</label>
        <input type="text" name="name" id="name">
        <div>
            <label for="text">本文</label>
            <div>
                <textarea name="text" id="text" cols="30" rows="10"></textarea>
            </div>
        </div>
        <input type="hidden" value="{{$post->id}}" name="id">
        <input type="hidden" value="{{$list_page}}" name="list_page">
        <input type="submit" value="返信">

    </form>

    @for($i=0; $i<$replies->count(); $i++)
        <x-reply :reply='$replies[$i]'></x-reply>

    @endfor




    <script src=" {{ asset('/js/post-menu.js') }} "></script>
    <script src=" {{ asset('/js/confirm-delete.js') }} "></script>
@endsection