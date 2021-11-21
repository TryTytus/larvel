@extends('layout.main')

@section('content')
<div class="w-1/2 m-auto">
    <form class="mt-10 text-2xl form-horizontal" method="post" action="/create">
        @csrf
        <label for="title">Tytuł</label>
        <input class="input my-4" name="title" type="text" value=""></input>
        <label for="content">Treść</label>
        <textarea class="textarea my-4" name="content" cols="30" rows="10"></textarea>
        <input class="button is-link" type="submit" value="Dodaj post"></input>
    </form>
</div>

@endsection