@extends('layouts.app')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ '/css/app.css' }}">
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

        <form class="search" action="/contacts/search" method="get">
            <div class="search__menu">
                <div class="menu__name">
                    <input class="menu__name--text type="text" name="search-name" value="" placeholder="名前やメールアドレスを入力してください"/>
                </div>
                <div class="search__gender">
                    <select class="search__gender--select" name="gender">
                        <option class="search__gender--option" value="" disabled selected>性別</option>
                        <option class="search__gender--option" value="男性" {{ request('gender') == '男性' ? 'selected' : '' }}>男性</option>
                        <option class="search__gender--option" value="女性"{{ request('gender') == '女性' ? 'selected' : '' }}>女性</option>
                        <option class="search__gender--option" value="その他" {{ request('gender') == 'その他' ? 'selected' : '' }}>その他</option>
                        <option class="search__gender--option" value="全て" {{ request('gender') == '全て' ? 'selected' : '' }}>全て</option>
                    </select>
                </div>
                <div class="search__detail">
                    <select class="search__detail-select" name="detail">
					    <option class="search__detail--text" value="" disabled selected>お問い合わせ内容</option>
                        <option class="form__detail--option" value="商品のお届けについて">商品のお届けについて</option>
						<option class="form__detail--option" value="商品の交換について">商品の交換について</option>
						<option class="form__detail--option" value="商品トラブル">商品トラブル</option>
						<option class="form__detail--option" value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
						<option class="form__detail--option" value="その他">その他</option>
                    </select>
                </div>
                <div class="search__date">
                    <input class="search__date--text" type="date" name="search-date" value="" />
                </div>
                <div class="search__button">
				    <input class="search__button--item" type="submit" value="検索">
                </div>
                <div class="search__reset">
                    <input class="search__reset--item" type="reset" value="リセット" />
                </div>
            </div>

            <div class="sab-nav__link">
                <div class="link__export">
                     <a class="link__export--item" href="">エクスポート</a>
                </div>
                <div class="sab-nav_page">
                    {{ $contacts->appends(request()->query())->links() }}
                </div>
            </div>
        </form>
    </nav>

	<form action="/contacts" method="post">
    @csrf
		<div class="admin-table">
			<table class="admin-table__inner">
				<tr class="admin-table__row">
					<th class="admin-table__header">お名前</th>
                    <th class="admin-table__header">性別</th>
                    <th class="admin-table__header">メールアドレス</th>
                    <th class="admin-table__header">お問い合わせ内容</th>
                    <th class="admin-table__header"></th>
				</tr>
        @if (@isset($contacts))
            @foreach ($contacts as $contact)
                <tr class="admin-table__row">
					<td class="admin-table__text">
                        <div class="table__name">
                            <input class="name--item" type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly/>
                            <input class="name--item" type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly/>
                        </div>
                    </td>
					<td class="admin-table__text">
                        <div class="table__gender">
						    <input class="gender--item" type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                        </div>
					</td>
                    <td class="admin-table__text">
                        <div class="table__email">
						    <input class="email--item" type="email" name="email" value="{{ $contact['email'] }}" readonly />
                        </div>
                    </td>
                    <td class="admin-table__text">
                        <div class="table__detail">
						    <input class="detail--item" type="text" name="detail" value="{{ $contact->category->detail }}" readonly/>
                        </div>
                    <td class="admin-table__text">
                        <div class="modal">
                             <a class="modal__link" href="">詳細</a>
                        </div>
                    </td>
                </tr>
            @endforeach 
        @endif 
			</table>
		</div>
	</form>
@endsection