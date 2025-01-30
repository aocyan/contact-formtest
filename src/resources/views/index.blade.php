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
	<form class="form" action="/contacts/confirm" method="post">
	@csrf
		<div class="form__group">
			<div class="form__title">
				<span>お名前 ※</span>
			</div>
			<div class="form__group-content">
				<div class="form__input">
					<input class="form__input--name" type="text" name="last_name" value="{{ old('last_name') }}"  placeholder="例:山田" />
					<div class="form__error--name">
					@error('last_name')
						{{ $message }}
					@enderror
				</div>
                    <input class="form__input--name" type="text" name="first_name" value="{{ old('first_name') }}"  placeholder="例:太郎" />
					<div class="form__error--name">
					@error('first_name')
						{{ $message }}
					@enderror
				</div>
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
                        <input type="radio" name="gender" value="男性" checked="checked">男性
                    </label>
                    <label class="form__input--label">
                        <input type="radio" name="gender" value="女性">女性
                    </label>
                    <label class="form__input--label">
                        <input type="radio" name="gender" value="その他">その他
                    </label>
				</div>
				<div class="form__error">
					@error('gender')
						{{ $message }}
					@enderror
				</div>
			</div>
		</div>
		<div class="form__group">
			<div class="form__title">
				<span>メールアドレス ※</span>
			</div>
			<div class="form__group-content">
				<div class="form__email">
					<input class="form__email--text" type="email" name="email" value="{{ old('email') }}" placeholder="例:test@example.com" />
				</div>
				<div class="form__error--email">
					@error('email')
						{{ $message }}
					@enderror
				</div>
			</div>
		</div>
		<div class="form__group">
			<div class="form__title">
				<span>電話番号 ※</span>
			</div>
			<div class="form__group-content">
				<div class="form__tel">
					<input class="form__tel--text" type="tel" name="tel_first" value="{{ old('tel_first') }}" placeholder="080" />
                    <span>-</span>
                    <input class="form__tel--text" type="tel" name="tel_second" value="{{ old('tel_second') }}" placeholder="1234" />
                    <span>-</span>
                    <input class="form__tel--text" type="tel" name="tel_third" value="{{ old('tel_third') }}" placeholder="5678" />
				</div>
				<div class="form__error--tel">
					@error('tel_first')
    					<p>{{ $message }}</p>
					@elseif ($errors->has('tel_second'))
    					<p>{{ $errors->first('tel_second') }}</p>
					@elseif ($errors->has('tel_third'))
    					<p>{{ $errors->first('tel_third') }}</p>
					@enderror
				</div>
			</div>
		</div>
        <div class="form__group">
			<div class="form__title">
				<span>住所 ※</span>
			</div>
			<div class="form__group-content">
				<div class="form__address">
					<input class="form__address--text" type="text" name="address" value="{{ old('address') }}" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
				</div>
				<div class="form__error--address">
					@error('address')
						{{ $message }}
					@enderror
				</div>
			</div>
		</div>
        <div class="form__group">
			<div class="form__title">
				<span>建物名</span>
			</div>
			<div class="form__group-content">
				<div class="form__building">
					<input class="form__building--text" type="text" name="building" value="{{ old('building') }}" placeholder="例:千駄ヶ谷マンション101" />
				</div>
			</div>
		</div>
        <div class="form__group">
			<div class="form__title">
				<span>お問い合わせの種類 ※</span>
			</div>
				<div class="form__group-content">
					<div class="form__detail">
                        <select class="form__detail-select" name="detail" >
						    <option class="form__detail--option" disabled selected>選択してください</option>
							<option class="form__detail--option" value="商品のお届けについて">商品のお届けについて</option>
							<option class="form__detail--option" value="商品の交換について">商品の交換について</option>
							<option class="form__detail--option" value="商品トラブル">商品トラブル</option>
							<option class="form__detail--option" value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
							<option class="form__detail--option" value="その他">その他</option>
                        </select>
					</div>
					<div class="form__error--detail">
						@error('detail')
							{{ $message }}
						@enderror
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
					<div class="form__error--content">
						@error('content')
							{{ $message }}
						@enderror
					</div>
				</div>
			</div>
			<div class="form__button">
				<button class="form__button-submit" type="submit">確認画面</button>
			</div>
	</form>
@endsection