<div class="blog-post">

    <h3>{{ $post->title }}</h3>
    <h5>{{ Carbon\Carbon::-parse($post->created_at)->format('m-d-Y')}}</h3>
    {{-- <img class="thumbnail" src="http://placehold.it/850x350"> --}}
    {{ $post->content }}    
    <div class="callout">
        <ul class="menu simple">
            <li><a href="#">Comments: 3</a></li>
        </ul>
    </div>

</div>