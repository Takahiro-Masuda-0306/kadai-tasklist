@extends('layouts.app')

@section('content')

{!! Form::model($task, ['route'=>['tasks.update', $task->id], 'method'=>'put']) !!}

<h1 class="mb-4 text-center">タスク{{ $task->id }}の編集ページ</h1>

<div class="row">
    <div class="col-sm-6 offset-sm-3">
        
    <div class="form-group mb-3">
        {!! Form::label('status', 'ステータス', ['class'=>'mb-2']) !!}
        {!! Form::text('status', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group mb-3">
    {!! Form::label('content', 'タスク内容', ['class'=>'mb-3']) !!}
    {!! Form::text('content', null, ['class'=>'form-control']) !!}
    </div>
    
    {!! Form::submit('更新する', ['class'=>'btn btn-success btn-block mb-3']) !!}
    
    </div>

</div>
    

{!! Form::close() !!}

<div class="row">
    <div class="col-sm-6 offset-sm-3">
        {!! link_to_route('tasks.index', '一覧に戻る', [], ['class'=>'btn btn-primary btn-block']) !!}
    </div>
</div>

@endsection