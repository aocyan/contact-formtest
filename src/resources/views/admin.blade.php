@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
						<input class="confirm-table__text--item type="text" name="name" value="" />山田　太郎
					</td>
				</tr>
                <tr class="confirm-table__row">
					<th class="confirm-table__header">性別</th>
					<td class="confirm-table__text">
						<input type="text" name="sex" value="" />男性
					</td>
				</tr>
				<tr class="confirm-table__row">
					<th class="confirm-table__header">メールアドレス</th>
					<td class="confirm-table__text">
						<input type="email" name="email" value="" />test@example.com
					</td>
				</tr>
				<tr class="confirm-table__row">
					<th class="confirm-table__header">電話番号</th>
					<td class="confirm-table__text">
						<input type="tel" name="tel" value="" />08012345678
					</td>
				</tr>
                <tr class="confirm-table__row">
					<th class="confirm-table__header">住所</th>
					<td class="confirm-table__text">
						<input type="tel" name="address" value="" />東京都渋谷区千駄ヶ谷1-2-3
					</td>
				</tr>
                <tr class="confirm-table__row">
					<th class="confirm-table__header">建物名</th>
					<td class="confirm-table__text">
						<input type="tel" name="building" value="" />千駄ヶ谷マンション101
					</td>
				</tr>
                <tr class="confirm-table__row">
					<th class="confirm-table__header">お問い合わせの種類</th>
					<td class="confirm-table__text">
						<input type="tel" name="kinds" value="" />商品の交換について
					</td>
				</tr>
				<tr class="confirm-table__row">
					<th class="confirm-table__header">お問い合わせの内容</th>
					<td class="confirm-table__text">
						<input type="text" name="content" value="" />届いた商品が注文した商品ではありませんでした。</br>商品の取り替えをお願いします。
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