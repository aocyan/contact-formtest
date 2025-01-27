@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="background--color">
    <nav>
        <div class="header-nav">
            <a class="header-nav__link" href="/login">login</a>
        </div>
    </nav>
    <div class="register-header">
        <div class="register-header__logo">
            <h2>Register</h2>
        </div>
    </div>
    <form class="register-form" action="/register" method="post">
    @csrf
        <div class="form__group">
            <div class="form__group-title">
                <p>お名前</p>
            </div>
            <input class="form__input" type="text" name="name" value="{{ old('name') }}" />
            <div class="form__group-title">
                <p>メールアドレス</p>
            </div>
            <input class="form__input" type="email" name="email" value="{{ old('email')"/>
            <div class="form__group-title">
                <p>パスワード</p>
            </div>
            <input class="form__input" type="password" name="password"/>
            <div class="form__button">
                <button class="form__button-submit" type="submit">登録</button>
            </div>
        </div>
    </form>
</div>
@endsection