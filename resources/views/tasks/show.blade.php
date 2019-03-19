@extends('layouts.app')

@section('content')

    <h1>タスク id = {{ $task->id }}の詳細ページ</h1>
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>{{ $task->id }}</th>
        </tr>
        <tr>
            <td>タスク</td>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <td>ステータス</td>
            <td>{{ $task->status }}</td>
        </tr>        
    </table>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-light']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection