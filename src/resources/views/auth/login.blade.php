@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <nav>
        <div class="header-nav">
            <a class="header-nav__link" href="/categories">register</a>
        </div>
    </nav>
    <div class="login-header">
        <div class="login-header__logo">
            <h2>Login</h2>
        </div>
    </div>
    <form class="login-form">
        <div class="form__group">
            <div class="form__group-title">
                <p>メールアドレス</p>
            </div>
            <input class="form__input" type="email" name="" value=""/ placeholder="test@example.com">
            <div class="form__group-title">
                <p>パスワード</p>
            </div>
            <input class="form__input" type="text" name="" value=""/ placeholder="coachtech1106">
            <div class="form__button">
                <button class="form__button-submit" type="submit">ログイン</button>
            </div>
        </div>
    </form>
@endsection