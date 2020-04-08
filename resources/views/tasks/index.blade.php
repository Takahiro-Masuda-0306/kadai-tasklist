@extends('layouts.app')

@section('content')

<h1 class="mb-4">タスク一覧</h1>

<div class="row">

    <div class="col-sm">
        <table class="table table-striped">
            @foreach($tasks as $task)
            <tr>
                <th>{!! link_to_route('tasks.show', $task->id, ['id'=>$task->id]) !!}</th>
                <td>{{ $task->content }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    
</div>

{!! link_to_route('tasks.create', '新規タスクを作成する', [], ['class'=>'btn btn-primary']) !!}
@endsection