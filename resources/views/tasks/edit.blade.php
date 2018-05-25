@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク編集ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
                <div class="form-group">    
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content',null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::select('status', ['0' => 'まだ', '1' => '進行中', '2' => '完了'], null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('送信', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection