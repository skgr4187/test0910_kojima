{{-- フォーム入力画面 --}}

@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="css/index.css" />
@endsection

@section('content')
    @if (count($errors) > 0)
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
        <div class="contact-form__content">
            <div class="contact-form__heading">
                Contact
            </div>
            <form class="form" action="/contacts/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item">お名前
                            <span class="form__label--required">※</span>
                        </label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="first_name" placeholder="例:山田" />
                            <input type="text" name="last_name" placeholder="例:太郎" />
                        </div>
                        {{-- <div class="form__error">
                        @if ($errors->has('name'))
                            {{$errors->('first_name')}}
                            {{$errors->('last_name')}}
                        </div> --}}
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item">性別
                            <span class="form__label--required">※</span>
                        </label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__label--item">
                            <input type="radio" class="check" name="gender" checked/>男性
                            <input type="radio" class="check" name="gender" />女性
                            <input type="radio" class="check" name="gender" />その他
                        </div>
                        {{-- <div class="form__error">
                            @error('gender')
                            {{$message}}
                            @enderror
                        </div> --}}
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item">メールアドレス
                            <span class="form__label--required">※</span>
                        </label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例:test@example.com"/>
                        </div>
                        {{-- <div class="form__error">
                            @error('email')
                            {{$message}}
                            @enderror
                        </div> --}}
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item">電話番号
                            <span class="form__label--required">※</span>
                        </label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="tel" name class="tell" placeholder="080"/>-
                            <input type="tel" name class="tell" placeholder="1234"/>-
                            <input type="tel" name class="tell" placeholder="5678"/>
                        </div>
                        {{-- <div class="form__error">
                            @error('tel')
                            {{$message}}
                            @enderror
                        </div> --}}
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item">住所
                            <span class="form__label--required">※</span>
                        </label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" />
                        </div>
                        {{-- <div class="form__error">
                            @error('address')
                            {{$message}}
                            @enderror
                        </div> --}}
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item">建物名</label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type=" text" name="building" placeholder="例:千駄ヶ谷マンション101" />
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item">お問い合わせの種類
                            <span class="form__label--required">※</span>
                        </label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <select name=”categories”>
                            {{-- select要素にはplaceholderを選択できない --}}
                                <option value="選択してください">
                                    選択してください
                                </option>
                                <option value="商品のお届けについて">
                                    商品のお届けについて
                                </option>
                                <option value="商品の交換について">
                                    商品の交換について
                                </option>
                                <option value="商品トラブル">
                                    商品トラブル
                                </option>
                                <option value="ショップへのお問い合わせ">
                                    ショップへのお問い合わせ
                                </option>
                                <option value="その他">
                                    その他
                                </option>
                            </select>
                            {{-- <div class="form__error">
                                @error('categories')
                                {{$message}}
                                @enderror
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <label class="form__label--item">お問い合わせ内容
                            <span class="form__label--required">※</span>
                        </label>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <textarea name="detail" placeholder="お問い合わせ内容をご記載ください"></textarea>
                        </div>
                        {{-- <div class="form__error">
                            @error('text')
                            {{$message}}
                            @enderror
                        </div> --}}
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">
                        確認画面
                    </button>
                </div>
            </form>
        </div>
@endsection

</html>