@extends('layout.main')


@section('content')
<div class="w-1/2 m-auto">
    <h1 class="text-left my-8 text-6xl">
        {{$post->author}}
    </h1>
    <p class="text-lg">
        {{ $post->content }}
    </p>
</div>

@endsection