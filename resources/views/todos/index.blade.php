@extends('todos.layout')

@section('content')
    <div class="d-flex flex-row justify-content-center m-md-5">
        <h1 class="px-md-5 py-md-2 m-0">All Your ToDos</h1>
        <a href="/todos/create" class="rounded text-white px-md-5 py-md-3 btn btn-success">Creaet New</a>
    </div>
    <ul class="list-group">
        <x-alert />
        @foreach($todos as $todo)
            <li class="list-group-item d-flex flex-row justify-content-center">
                <p class="px-md-5 py-md-2 m-0">{{ $todo->title }}</p>
                <a href="{{ '/todos/'.$todo->id.'/edit' }}" class="rounded text-white px-md-5 py-md-2 btn btn-info">Edit</a>
            </li>
        @endforeach
    </ul>
@endsection
