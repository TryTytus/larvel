@extends('layout.main')

@section('content')
<div class="flex justify-center">
    <div class="grid gap-4 grid-cols-3 w-2/3 mt-8">
        @foreach ($posts as $post)
            @include('components.card', ['post'=>$post])
        @endforeach
    </div>
</div>
@endsection