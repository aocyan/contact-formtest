@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <nav>
        <div class="header-nav">
            <a class="header-nav__link" href="/auth/login">login</a>
        </div>
    </nav>
    <div class="register-header">
        <div class="register-header__logo">
            <h2>Register</h2>
        </div>
    </div>
    <form class="register-form">
        <div class="form__group">
            <div class="form__group-title">
                <p>お名前</p>
            </div>
            <input class="form__input" type="email" name="" value=""/ placeholder="例：山田　太郎">
            <div class="form__group-title">
                <p>メールアドレス</p>
            </div>
            <input class="form__input" type="email" name="" value=""/ placeholder="test@example.com">
            <div class="form__group-title">
                <p>パスワード</p>
            </div>
            <input class="form__input" type="text" name="" value=""/ placeholder="coachtech1106">
            <div class="form__button">
                <button class="form__button-submit" type="submit">登録</button>
            </div>
        </div>
    </form>
@endsection