@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('title')
<h1 class="title">内容確認</h1>
@endsection


@section('content')
<form class="form" action="/contact/complete" method="post">
@csrf
<div>
    <table>
        <tr class="form__group">
            <th class="form__label">お名前</th>
            <td class="form__content">
                <input class="form__content-name" type="text" name="fullname" value="{{ $contact['surname'].' '.$contact['givenname'] }}" readonly>           
            </td>
        </tr>
        <tr class="form__group">
            <th class="form__label">性別</th>
            <td class="form__content">
                <input class="form__content-male_female" type="text" value="{{ $contact['gender'] }}" readonly>
                @if ($contact['gender'] == '男性')
                <input class="form__content-male_female" type="hidden" name="gender" value="1" readonly>
                @else
                <input class="form__content-male_female" type="hidden" name="gender" value="2" readonly>
                @endif
            </td>
        </tr>
        <tr class="form__group">
            <th class="form__label">メールアドレス</th>
            <td class="form__content">
                <input class="form__content-mail-address" type="text" name="email" value="{{ $contact['email'] }}" readonly>   
            </td>
        </tr>
        <tr class="form__group">
            <th class="form__label">郵便番号</th>
            <td class="form__content">
                <input class="form__content-post-code" type="text" name="postcode" value="{{ $contact['postcode'] }}" readonly>
            </td>
        </tr>
        <tr class="form__group">
            <th class="form__label">住所</th>
            <td class="form__content">
                <input class="form__content-address" type="text" name="address" value="{{ $contact['address'] }}" readonly>
            </td>
        </tr>
        <tr class="form__group">
            <th class="form__label">建物名</th>
            <td class="form__content">
                <input class="form__content-building" type="text" name="building_name" value="{{ $contact['building_name'] }}" readonly>
            </td>
        </tr>
        <tr class="form__group">
            <th class="form__label">ご意見</th>
            <td class="form__content">
                <input class="form__content-opinion" type="textarea" name="opinion"  rows="4" value="{{ $contact['opinion'] }}" readonly>
            </td>
        </tr>
    </table>
    <div class="form__button">
        <button class="form__button-submit" type="submit">送信</button>
    </div>
    <a href="/">修正する</a>
</div>
</form>
@endsection
