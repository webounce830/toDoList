@extends('todos.layout')

@section('content')
    <h1 class="py-4">Update this todo list</h1>
    <x-alert />
    <form method="post" action="{{ route('todo.update', $todo->id) }}" class="py-5">
        @csrf
        @method('patch')
        <input type="text" name="title" value="{{ $todo->title }}" class="py-2 px-2 border" />
        <input type="submit" value="Update" class="p-2 border rounded-lg" />
    </form>

    <a href="/todos" class="rounded text-dark border px-md-5 py-md-3 btn btn-light">Back</a>
@endsection
