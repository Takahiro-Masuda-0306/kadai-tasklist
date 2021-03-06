@extends('layouts.app')

@section('content')

<h1 class="mb-4">タスク{{ $task->id }}の詳細ページ</h1>


<table class="table table-striped">
    <tr>
        <th>status</th>
        <td>{{ $task->status }}</td>
    </tr>
    
    <tr>
        <th>contents</th>
        <td>{{ $task->content }}</td>
    </tr>
</table>
        
{!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-light mb-3']) !!}
        
{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method'=>'delete']) !!} 
        
    {!! Form::submit('削除する', ['class'=>'btn btn-danger']) !!}
        
{!! Form::close() !!}
        
    


@endsection