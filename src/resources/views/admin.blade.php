@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
    <div class="admin-header">
        <div class="admin-header__logo">
            <h2>Admin</h2>
        </div>
    </div>

    <nav>
        <div class="header-nav">
            <form action="/logout" method="post">
            @csrf
                <button type="submit" class="header-nav__link">Logout</button>
            </form>
        </div>

        <div class="search">
            <div class="search__menu">
                <div class="menu__name">
                    <input class="menu__name--text type="text" name="search-name" value="" placeholder="名前やメールアドレスを入力してください"/>
                </div>
                <div class="search__sex">
                    <select class="search__sex--select">
					    <option class="search__sex--option" value="" disabled selected>性別</option>
                        <option class="search__sex--option" value="男性" >男性</option>
                        <option class="search__sex--option" value="女性" >女性</option>
                        <option class="search__sex--option" value="その他" >その他</option>
                    </select>
                </div>
                <div class="search__kind">
                    <select class="search__kinds-select">
					    <option class="search__kinds--text" value="" disabled selected>お問い合わせ内容</option>
                    </select>
                </div>
                <div class="search__date">
                    <input class="search__date--text" type="date" name="search-name" value="" />
                </div>
                <div class="search__button">
				    <button class="search__button--item" type="submit">検索</button>
                </div>
                <div class="search__reset">
                    <button class="search__reset--item" type="submit">リセット</button>
                </div>
            </div>

            <div class="sab-nav__link">
                <div class="link__export">
                     <a class="link__export--item" href="">エクスポート</a>
                </div>
                <div class="sab-nav_page">
                    ※ページネーション
                </div>
            </div>
        </div>
    </nav>

	<form class="form">
		<div class="admin-table">
			<table class="admin-table__inner">
				<tr class="admin-table__row">
					<th class="admin-table__header">お名前</th>
                    <th class="admin-table__header">性別</th>
                    <th class="admin-table__header">メールアドレス</th>
                    <th class="admin-table__header">お問い合わせ内容</th>
                    <th class="admin-table__header"></th>
				</tr>

                <tr class="admin-table__row">
					<td class="admin-table__text">
                        <input type="text" name="name" value="" />山田　太郎
                    </td>
					<td class="admin-table__text">
						<input type="text" name="sex" value="" />男性
					</td>
                    <td class="admin-table__text">
						<input type="text" name="email" value="" />test@example.com
                    </td>
                    <td class="admin-table__text">
						<input type="tel" name="kinds" value="" />商品の交換について
                    <td class="admin-table__text">
                        <div class="modal">
                             <a class="modal__link" href="">詳細</a>
                        </div>
                    </td>
				</tr>

                <tr class="admin-table__row">
					<td class="admin-table__text">
                        <input type="text" name="name" value="" />山田　太郎
                    </td>
					<td class="admin-table__text">
						<input type="text" name="sex" value="" />男性
					</td>
                    <td class="admin-table__text">
						<input type="text" name="email" value="" />test@example.com
                    </td>
                    <td class="admin-table__text">
						<input type="tel" name="kinds" value="" />商品の交換について
                    <td class="admin-table__text">
                        <div class="modal">
                             <a class="modal__link" href="">詳細</a>
                        </div>
                    </td>
				</tr>

                <tr class="admin-table__row">
					<td class="admin-table__text">
                        <input type="text" name="name" value="" />山田　太郎
                    </td>
					<td class="admin-table__text">
						<input type="text" name="sex" value="" />男性
					</td>
                    <td class="admin-table__text">
						<input type="text" name="email" value="" />test@example.com
                    </td>
                    <td class="admin-table__text">
						<input type="tel" name="kinds" value="" />商品の交換について
                    <td class="admin-table__text">
                        <div class="modal">
                             <a class="modal__link" href="">詳細</a>
                        </div>
                    </td>
				</tr>

                <tr class="admin-table__row">
					<td class="admin-table__text">
                        <input type="text" name="name" value="" />山田　太郎
                    </td>
					<td class="admin-table__text">
						<input type="text" name="sex" value="" />男性
					</td>
                    <td class="admin-table__text">
						<input type="text" name="email" value="" />test@example.com
                    </td>
                    <td class="admin-table__text">
						<input type="tel" name="kinds" value="" />商品の交換について
                    <td class="admin-table__text">
                        <div class="modal">
                             <a class="modal__link" href="">詳細</a>
                        </div>
                    </td>
				</tr>

                <tr class="admin-table__row">
					<td class="admin-table__text">
                        <input type="text" name="name" value="" />山田　太郎
                    </td>
					<td class="admin-table__text">
						<input type="text" name="sex" value="" />男性
					</td>
                    <td class="admin-table__text">
						<input type="text" name="email" value="" />test@example.com
                    </td>
                    <td class="admin-table__text">
						<input type="tel" name="kinds" value="" />商品の交換について
                    <td class="admin-table__text">
                        <div class="modal">
                             <a class="modal__link" href="">詳細</a>
                        </div>
                    </td>
				</tr>

                <tr class="admin-table__row">
					<td class="admin-table__text">
                        <input type="text" name="name" value="" />山田　太郎
                    </td>
					<td class="admin-table__text">
						<input type="text" name="sex" value="" />男性
					</td>
                    <td class="admin-table__text">
						<input type="text" name="email" value="" />test@example.com
                    </td>
                    <td class="admin-table__text">
						<input type="tel" name="kinds" value="" />商品の交換について
                    <td class="admin-table__text">
                        <div class="modal">
                             <a class="modal__link" href="">詳細</a>
                        </div>
                    </td>
				</tr>

                <tr class="admin-table__row">
					<td class="admin-table__text">
                        <input type="text" name="name" value="" />山田　太郎
                    </td>
					<td class="admin-table__text">
						<input type="text" name="sex" value="" />男性
					</td>
                    <td class="admin-table__text">
						<input type="text" name="email" value="" />test@example.com
                    </td>
                    <td class="admin-table__text">
						<input type="tel" name="kinds" value="" />商品の交換について
                    <td class="admin-table__text">
                        <div class="modal">
                             <a class="modal__link" href="">詳細</a>
                        </div>
                    </td>
				</tr>
   
			</table>
		</div>
	</form>
@endsection