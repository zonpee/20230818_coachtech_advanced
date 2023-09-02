@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('title')
<h2 class="title">お問い合わせ</h2>
@endsection


@section('content')
<form class="form" action="contact/confirm">
    @csrf
    <div>
        <table >
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
            <tr class="form__group">
                <th class="form__label" rowspan="2">性別<span class="form__label--required">※</span></th>
                <td class="form__content">            
                    <input class="form__content-surname" type="radio" name="male_female" value="{{ old('male_female') }}">
                </td>
            </tr>
        </table>
    </div>


</form>




@endsection