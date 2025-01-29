@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
    <div class="confirm-header">
        <div class="confirm-header__logo">
            <h2>Confirm</h2>
        </div>
    </div>
	<form class="form">
		<div class="confirm-table">
			<table class="confirm-table__inner">
				<tr class="confirm-table__row">
					<th class="confirm-table__header">お名前</th>
					<td class="confirm-table__text">
						<div class="text__name">
							<input class="text__name--item" type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
							<input class="text__name--item" type="text" name="first_name" value="{{$contact['first_name'] }}" readonly />
						</div>
					</td>
				</tr>
                <tr class="confirm-table__row">
					<th class="confirm-table__header">性別</th>
					<td class="confirm-table__text">
						<input class="text__gender--item" type="text" name="dender" value="{{ $contact['gender'] }}" readonly />
					</td>
				</tr>
				<tr class="confirm-table__row">
					<th class="confirm-table__header">メールアドレス</th>
					<td class="confirm-table__text">
						<input class="text__email--item" type="email" name="email" value="{{ $contact['email'] }}" readonly />
					</td>
				</tr>
				<tr class="confirm-table__row">
					<th class="confirm-table__header">電話番号</th>
					<td class="confirm-table__text">
						<div class="text__tel">
							<input type="tel" name="tel_first" value="{{ $contact['tel_first'] }}" readonly />
							<input type="tel" name="tel_second" value="{{ $contact['tel_second'] }}" readonly />
							<input type="tel" name="tel_third" value="{{ $contact['tel_third'] }}" readonly />
						</div>
					</td>
				</tr>
                <tr class="confirm-table__row">
					<th class="confirm-table__header">住所</th>
					<td class="confirm-table__text">
						<input class="text__address--item" type="text" name="address" value="{{ $contact['address'] }}" readonly />
					</td>
				</tr>
                <tr class="confirm-table__row">
					<th class="confirm-table__header">建物名</th>
					<td class="confirm-table__text">
						<input class="text__building--item" type="text" name="building" value="{{ $contact['building'] }}" readonly />
					</td>
				</tr>
                <tr class="confirm-table__row">
					<th class="confirm-table__header">お問い合わせの種類</th>
					<td class="confirm-table__text">
						<input class=""text__kinds--item" type="text" name="kinds" value="{{ $contact['kinds'] }}" readonly />
					</td>
				</tr>
				<tr class="confirm-table__row">
					<th class="confirm-table__header">お問い合わせの内容</th>
					<td class="confirm-table__text">
							<input class="content--area" type="text" name="content" value="{{ $contact['content'] }}" readonly></input>
					</td>
				</tr>
					</table>
				</div>
                <div class="form-button">
				    <div class="form__submit">
					    <button class="form__submit--button" type="submit">送信</button>
				    </div>
                    <div class="form__fix">
					    <button class="form__fix--button" type="submit"><span class="fix__text--item">修正</span></button>
				    </div>
                </div>
			</form>
@endsection