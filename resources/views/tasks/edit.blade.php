@extends('layouts.app')

@section('content')

    <h1>タスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::select('status', ['0' => 'まだ', '1' => '進行中', '2' => '完了']) !!}
        
        {!! Form::submit('送信') !!}
        
    {!! Form::close() !!}

@endsection