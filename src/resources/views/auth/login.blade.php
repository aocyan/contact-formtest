@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="background--color">
    <nav>
        <div class="header-nav">
            <a class="header-nav__link" href="/register">register</a>
        </div>
    </nav>
    <div class="login-header">
        <div class="login-header__logo">
            <h2>Login</h2>
        </div>
    </div>
    <form class="login-form" action="/login" method="post">
    @csrf
        <div class="form__group">
            <div class="form__group-title">
                <p>メールアドレス</p>
            </div>
            <div class="form__error">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
            <input class="form__input" type="email" name="email" value="{{ old('email') }}"/>
            <div class="form__group-title">
                <p>パスワード</p>
            </div>
            <div class="form__error">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
            <input class="form__input" type="password" name="password"/>
            <div class="form__button">
                <button class="form__button-submit" type="submit">ログイン</button>
            </div>
        </div>
    </form>
</div>
@endsection