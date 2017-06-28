<div class="blog-post" >

    <h2 class="post-title">{{ $post->title }}</h3>
    <h6>{{ $post->created_at->toFormattedDateString() }}</h3>
    {{-- <img class="thumbnail" src="http://placehold.it/850x350"> --}}
    {{ $post->content }}    
    <div class="callout">
        <ul class="menu simple">
            <li><a href="#">Comments: 3</a></li>
        </ul>
    </div>

</div>