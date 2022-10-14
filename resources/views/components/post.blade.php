<div class="post">
    <p class="post-info">
        {{$post->maker}}  /  {{$post->created_at}} 
        <i class="fas fa-bars bars-icon on"></i>
    </p>

    <x-post-menu :post='$post' :page='$page'></x-post-menu>

    <p class="text">{{$post->text}}</p>

</div>