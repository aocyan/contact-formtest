@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="contact-header">
        <div class="contact-header__logo">
            <h2>Contact</h2>
        </div>
    </div>
	<form class="form">
		<div class="form__group">
			<div class="form__title">
				<span>お名前 ※</span>
			</div>
			<div class="form__group-content">
				<div class="form__input">
					<input class="form__input--name" type="text" name="name" placeholder="例:山田" />
                    <input class="form__input--name" type="text" name="name" placeholder="例:太郎" />
				</div>
				<div class="form__error">
					<!--バリデーション機能を実装したら記述します。-->
				</div>
			</div>
		</div>
        <div class="form__group">
			<div class="form__title">
				<span>性別 ※</span>
			</div>
			<div class="form__group-content">
				<div class="form__input-check">
					<label class="form__input--label">
                        <input type="radio" name="sex" value="男性" checked="checked">男性
                    </label>
                    <label class="form__input--label">
                        <input type="radio" name="sex" value="女性">女性
                    </label>
                    <label class="form__input--label">
                        <input type="radio" name="sex" value="その他">その他
                    </label>
				</div>
				<div class="form__error">
					<!--バリデーション機能を実装したら記述します。-->
				</div>
			</div>
		</div>
		<div class="form__group">
			<div class="form__title">
				<span>メールアドレス ※</span>
			</div>
			<div class="form__group-content">
				<div class="form__email">
					<input class="form__email--text" type="email" name="email" placeholder="例:test@example.com" />
				</div>
				<div class="form__error">
					<!--バリデーション機能を実装したら記述します。-->
				</div>
			</div>
		</div>
		<div class="form__group">
			<div class="form__title">
				<span>電話番号 ※</span>
			</div>
			<div class="form__group-content">
				<div class="form__tel">
					<input class="form__tel--text" type="tel" name="tel" placeholder="080" />
                    <span>-</span>
                    <input class="form__tel--text" type="tel" name="tel" placeholder="1234" />
                    <span>-</span>
                    <input class="form__tel--text" type="tel" name="tel" placeholder="5678" />  
				</div>
				<div class="form__error">
					<!--バリデーション機能を実装したら記述します。-->
				</div>
			</div>
		</div>
        <div class="form__group">
			<div class="form__title">
				<span>住所 ※</span>
			</div>
			<div class="form__group-content">
				<div class="form__address">
					<input class="form__address--text type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
				</div>
				<div class="form__error">
					<!--バリデーション機能を実装したら記述します。-->
				</div>
			</div>
		</div>
        <div class="form__group">
			<div class="form__title">
				<span>建物名</span>
			</div>
			<div class="form__group-content">
				<div class="form__building">
					<input class="form__building--text type="text" name="building" placeholder="例:千駄ヶ谷マンション101" />
				</div>
				<div class="form__error">
					<!--バリデーション機能を実装したら記述します。-->
				</div>
			</div>
		</div>
        <div class="form__group">
			<div class="form__title">
				<span>お問い合わせの種類 ※</span>
			</div>
				<div class="form__group-content">
					<div class="form__kinds">
                        <select class="form__kinds-select">
						    <option class="form__kinds--option" value="" disabled selected>選択してください</option>
                        </select>
					</div>
                </div>
			</div>
        </div>
		<div class="form__group">
			<div class="form__title">
				<span>お問い合わせ内容 ※</span>
			</div>
				<div class="form__group-content">
					<div class="form__textarea">
						<textarea class="form__textarea--text" name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
					</div>
				</div>
			</div>
			<div class="form__button">
				<button class="form__button-submit" type="submit">確認画面</button>
			</div>
	</form>
@endsection