@extends('admin.layout')

@section('contents')
    <h1>ユーザ一覧</h1>
    <table border="1">
        <tr>
            <td>ユーザーID</td>
            <td>ユーザー名</td>
            <td>タスク数</td>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->task_num }}</td>
        </tr>
        @endforeach
    </table>
@endsection