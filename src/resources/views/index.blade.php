@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('title')
<h1 class="title">お問い合わせ</h1>
@endsection


@section('content')
<form class="form" action="contact/confirm">
    @csrf
    <div>
        <table>
            <tr class="form__group">
                <th class="form__label" rowspan="2">お名前<span class="form__label--required">※</span></th>
                <td class="form__content">            
                    <input class="form__content-surname" type="text" name="surname" value="{{ old('surname') }}">           
                </td>
                <td  class="form__content">
                    <input class="form__content-givenname" type="text" name="givenname" value="{{ old('givenname') }}">     
                </td>
            </tr>
            <tr class="form__annotation">
                <td class="form__annotation-surname">例）山田</td>
                <td class="form__annotation-givenname">例）太郎</td>
            </tr>
            @error('surname')
            <tr>
                <th class="form__error">{{ $message }}</th>
            </tr>
            @enderror
            @error('givenname')
            <tr>
                <th class="form__error">{{ $message }}</th>
            </tr>
            @enderror


            <tr class="form__group">
                <th class="form__label">性別<span class="form__label--required">※</span></th>
                <td class="form__content">
                    <input class="form__content-male" type="radio" name="gender" value="男性" checked>男性</input>
                    <input class="form__content-female" type="radio" name="gender" value="女性">女性</input>
                </td>
            </tr>
            @error('gender')
            <tr>
                <th class="form__error">{{ $message }}</th>
            </tr>
            @enderror


            <tr class="form__group">
                <th class="form__label" rowspan="2">メールアドレス<span class="form__label--required">※</span></th>
                <td class="form__content">
                    <input class="form__content-mail-address" type="text" name="email" value="{{ old('email') }}">   
                </td>
            </tr>
            <tr class="form__annotation">
                <td class="form__annotation-mail-address">例）test@example.com</td>
            </tr>
            @error('email')
            <tr>
                <th class="form__error">{{ $message }}</th>
            </tr>
            @enderror


            <tr class="form__group">
                <th class="form__label" rowspan="2">郵便番号<span class="form__label--required">※</span></th>
                <td class="form__content">
                    <input class="form__content-post-code" type="text" name="postcode" value="{{ old('postcode') }}">   
                </td>
            </tr>
            <tr class="form__annotation">
                <td class="form__annotation-surname">例）123-4567</td>
            </tr>
            @error('postcode')
            <tr>
                <th class="form__error">{{ $message }}</th>
            </tr>
            @enderror



            <tr class="form__group">
                <th class="form__label" rowspan="2">住所<span class="form__label--required">※</span></th>
                <td class="form__content">
                    <input class="form__content-address" type="text" name="address" value="{{ old('address') }}">   
                </td>
            </tr>
            <tr class="form__annotation">
                <td class="form__annotation-address">例）東京都渋谷区千駄ヶ谷1-2-3</td>
            </tr>
            @error('address')
            <tr>
                <th class="form__error">{{ $message }}</th>
            </tr>
            @enderror


            <tr class="form__group">
                <th class="form__label" rowspan="2">建物名</th>
                <td class="form__content">
                    <input class="form__content-building" type="text" name="building_name" value="{{ old('building_name') }}">   
                </td>
            </tr>
            <tr class="form__annotation">
                <td class="form__annotation-building">例）千駄ヶ谷マンション101</td>
            </tr>


            <tr class="form__group">
                <th class="form__label">ご意見<span class="form__label--required">※</th>
                <td class="form__content">
                    <input class="form__content-opinion" type="textarea" name="opinion" rows="4" value="{{ old('opinion') }}">   
                </td>
            </tr>
            @error('opinion')
            <tr>
                <th class="form__error">{{ $message }}</th>
            </tr>
            @enderror


        </table>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認</button>
        </div>
    </div>
</form>
@endsection