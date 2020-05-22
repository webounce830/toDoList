@extends('todos.layout')

@section('content')
    <h1 class="py-4">What next you need To Do</h1>
    <x-alert />
    <form method="post" action="/todos/create" class="py-5">
        @csrf
        <input type="text" name="title" class="py-2 px-2 border" />
        <input type="submit" value="Create" class="p-2 border rounded-lg" />
    </form>

    <a href="/todos" class="rounded text-dark border px-md-5 py-md-3 btn btn-light">Back</a>
@endsection
