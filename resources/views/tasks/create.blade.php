@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
    {!! Form::label('content', 'タスク:') !!}
    {!! Form::text('content') !!}
    
    {!! Form::label('status', 'ステータス:') !!}
    {!! Form::select('status', ['0' => 'まだ', '1' => '進行中', '2' => '完了'], '0') !!}
    
    {!! Form::submit('投稿') !!}
    
    {!! Form::close() !!}

@endsection