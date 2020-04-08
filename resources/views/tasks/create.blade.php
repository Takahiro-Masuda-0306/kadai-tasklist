@extends('layouts.app')

@section('content')

<h1 class="mb-4">新規タスク作成ページ</h1>

<div class="row">
    <div class="col-sm-6 offset-sm-3">
        
        {!! Form::model($task, ['route'=>'tasks.store']) !!}
            <div class="form-group mb-3">
                {!! Form::label('content', 'タスク内容', ['class'=>'mb-2']) !!}
                {!! Form::text('content', null, ['class'=>'form-control']) !!}
            </div>
            
            {!! Form::submit('作成する', ['class'=>'btn btn-success btn-block mb-3']) !!}
        {!! Form::close() !!}
        
        {!! link_to_route('tasks.index', 'タスク一覧に戻る', [], ['class'=>'btn btn-primary btn-block mb-3']) !!}
        
    </div>
</div>

@endsection