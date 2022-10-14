@extends('layouts.app')

@section('title', '投稿')

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

    <form action=" {{ url('/add') }} " method="post">
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
        <input type="submit" value="投稿">

    </form>

@endsection