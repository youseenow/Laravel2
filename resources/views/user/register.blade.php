@extends('layout')

{{-- メインコンテンツ --}}
@section('contents')

<h1>ユーザー登録</h1>

@if ($errors->any())
<div>
    @foreach ($errors->all() as $error)
    {{ $error }}<br>
    @endforeach
</div>
@endif

<form method="post" action="/user/register">
    @csrf
    名前：<input name="name" value="{{ old('name') }}"><br>
    email：<input name="email" value="{{ old('email') }}"><br>
    パスワード：<input name="password" type="password"><br>
    パスワード確認：<input name="password_check" type="password"><br>
    <button>登録する</button>
</form>

@endsection