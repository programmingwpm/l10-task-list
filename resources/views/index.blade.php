@extends('layouts.app')

@section('title', 'The list of tasks')

@section('content')
    {{-- @if (count($tasks))
        @foreach ($tasks as $task)
            <div>{{ $task->title }}</div>
        @endforeach
    @else
        <div>The are no tasks!</div>
    @endif --}}

    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>The are no tasks!</div>
    @endforelse
@endsection
