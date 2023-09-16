@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/manage.css') }}">
@endsection


@section('title')
<h1 class="title">管理システム</h1>
@endsection


@section('content')
<form action="/manage/list" method="post">
    @csrf
    <div>
        <label for="fullname">お名前</label>
        <input type="text" name="fullname">
    </div>
    <div>
        <label for="gender">性別</label>
        <input type="radio" name="gender">全て</input>
        <input type="radio" name="gender">男性</input>
        <input type="radio" name="gender">女性</input>
    </div>
    <div>
        <label for="createday">登録日</label>
        <input type="text" name="createday"> ~
        <input type="text" name="createday">
    </div>
    <div>
        <label for="email">メールアドレス</label>
        <input type="text" name="email">
    </div>
    <button>検索</button>
    <a href="/manage">リセット</a>
</form>

<table class=contact__list>
    <tr>
        <th>ID</th>
        <th>お名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>ご意見</th>
    </tr>
    @isset ($contacts)
    @foreach ($contacts as $contact)
    <tr>
        <td>{{ $contact['id'] }}</td>
        <td>{{ $contact['fullname'] }}</td>
        <td>{{ $contact['gender'] }}</td>
        <td>{{ $contact['email'] }}</td>
        <td>{{ $contact['opinion'] }}</td>
        <td>
            <form action="/manage" method="post">
                @csrf
                <button>削除</button>
            </form>
        </td>
    </tr>
    @endforeach
    @endisset
</table>


@endsection