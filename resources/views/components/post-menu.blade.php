<div class="post-menu">

    <form action=" {{ url('/delete/' .$post->id) }} " method="get" onsubmit="return confirmDelete()">
        @csrf
        <input type="submit" value="削除" class="post-menu-option">
        <input type="hidden" value="{{$page}}" name="list_page">
    </form>

    <a href=" {{ url('/edit/' .$post->id. '?list_page=' .$page) }} ">
        <button class="post-menu-option">更新</button>
    </a>

    <a href=" {{ url('/reply/' .$post->id. '?list_page=' .$page) }} ">
        <button class="post-menu-option">返信</button>
    </a>


</div>