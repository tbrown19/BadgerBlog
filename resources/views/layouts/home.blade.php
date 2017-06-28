@extends('layouts.app')

@section('content')
    @include('layouts/partials/site-header')
      <div class="medium-8 columns">
       @each('layouts.blog-posts.partials.post', $posts, 'post')
       

      </div>

    @include('layouts/partials/sidebar')
@endsection
