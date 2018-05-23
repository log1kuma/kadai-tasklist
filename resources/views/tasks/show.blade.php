@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->content }} のタスク詳細ページ</h1>
    <p>{{ $task->content }}</p>

    {!! link_to_route('tasks.edit', '編集する', [$task->id]) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    
@endsection