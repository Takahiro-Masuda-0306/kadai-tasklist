@extends('layouts.app')

@section('content')

@if(\Auth::check())

<h1 class="mb-4">タスク一覧</h1>

<div class="row">

    <div class="col-sm">
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>ステータス</th>
                <th>タスク内容</th>
            </tr>
            
            @foreach($tasks as $task)
            <tr>
                <th>{!! link_to_route('tasks.show', $task->id, ['id'=>$task->id]) !!}</th>
                <td>{{ $task->status }}</td>
                <td>{{ $task->content }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
</div>

{!! link_to_route('tasks.create', '新規タスクを作成する', [], ['class'=>'btn btn-primary']) !!}

@else
    <div class="text-center mb-4">
        <h1>Tasklist</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! link_to_route('signup.get', '新規登録', [], ['class'=>'btn btn-primary btn-block mb-4']) !!}
            {!! link_to_route('login', 'ログイン', [], ['class'=>'btn btn-success btn-block']) !!}
        </div>
    </div>
@endif
@endsection