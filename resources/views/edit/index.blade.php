@extends('layouts.app')

@section('title', '編集')

@section('css-link')
    <link rel="stylesheet" href=" {{ asset('/css/post-page.css') }} ">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

@endsection

@section('content')

    <div class="link-btn-container">
        <a href=" {{ url('/?page=' .$list_page) }} ">
            <button>戻る</button>
        </a>
    </div>

    <form action=" {{ url('/update/' .$post->id) }} " method="get">
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
        <p>{{$post->maker}}</p>
        <input type="hidden" name="name" value="{{$post->maker}}">
        <input type="hidden" name="list_page" value="{{$list_page}}">
        <div>
            <label for="text">本文</label>
            <div>
                <textarea name="text" id="text" cols="30" rows="10">{{$post->text}}</textarea>
            </div>
        </div>
        <input type="submit" value="更新">

    </form>

@endsection