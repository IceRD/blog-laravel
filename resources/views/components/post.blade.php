@props(['post'])

<div class="content">
    <header class="main">
        <h1>{{ $post->title }}</h1>
    </header>
    @if($post->image)
        <span class="image main"><img src="{{ asset($post->image) }}" alt=""></span>
    @endif
    <div class="post-description"> {!! $post->description !!} </div>
</div>

