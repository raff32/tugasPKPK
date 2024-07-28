@extends('layouts.main')

{{-- @extends('layouts.main') --}}

@section('container')
    <article class="text-light">
        <h2 class="text-light">{{ $post['title'] }}</h2>
        <h5 class="text-light"> <u>
                {{ $post['author'] }}
            </u>
        </h5>
        <p class="text-light">{{ $post['body'] }}</p>
    </article>

    <a class="text-light" href="/blog">Back to Posts</a>
@endsection


