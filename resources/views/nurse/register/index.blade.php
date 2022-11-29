<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN - ログイン</title>
    <meta name="viewport" content="width=device-width">
    <meta name="keyword" content="">
    <meta name="description" content="">
    <meta name="format-detection" content="telephone=no">
    <link rel="canonical" href="https://example.com">

    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="">
    <meta property="og:description" content="">
    <meta property="og:title" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:image" content="">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">

    <script src="https://kit.fontawesome.com/54f6bae288.js" crossorigin="anonymous"></script>

</head>

<body>

    <div class="l-container l-login">
        <header class="l-header">
            <a href="./" class="m-logo">
                <img src="../assets/img/logo.svg" width="179" alt="CHOKOWA" class="m-logo__img">
                <span class="m-logo__text m-sp-hidden">スキマ時間にちょこっとワーク</span>
            </a>
        </header>

        <main class="l-main l-signup">
            <div class="l-content">
                <div class="sec-signup">
                    <div class="m-wrapper">
                        <h1 class="m-title">新規登録</h1>
                        <div class="sec-signup__content">
                            <form action="{{ route('nurse.register') }}" method="POST" class="m-signup__form">
                                @csrf
                                <div class="form-group">
                                    <label for="email">メールアドレス<span class="m-required">必須</span></label>
                                    <p class="sec-signup__text sec-signup__text01">※キャリアメールは利用できません(@docomo.ne.jp
                                        <br class="m-pc-hidden">@i.softbank.ne.jp @ezweb.ne.jpなど)
                                    </p>
                                    <input type="email" id="email" name="email" class="m-email @error('email') is-invalid @enderror" value="{{ old('email') }}" 
                                        oninvalid="this.setCustomValidity('有効なメールアドレスを入力してください。')"
                                        oninput="this.setCustomValidity('')" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">パスワード<span class="m-required">必須</span></label>
                                    <p class="sec-signup__text mB15">※半角英数6文字以上で作成ください</p>
                                    <input type="password" id="password" name="password"
                                        class="m-password @error('password') is-invalid @enderror" value="{{ old('password') }}" 
                                        oninvalid="this.setCustomValidity('有効なパスワードを入力してください。')"
                                        oninput="this.setCustomValidity('')" required>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="m-password_confirmation @error('password') is-invalid @enderror"
                                        placeholder="確認用" value="{{ old('password') }}" 
                                        oninvalid="this.setCustomValidity('有効なパスワードを入力してください。')"
                                        oninput="this.setCustomValidity('')" required>
                                </div>
                                @if ($errors->any())
                                    <ul class="m-error form-group">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="form-group form-groupagree form-checkbox">
                                    <label for="agree">
                                        <input type="checkbox" id="agree" name="agree" class="m-agree"
                                            oninvalid="this.setCustomValidity('上記の内容に同意する場合、このチェックボックスにチェックを入れてください。')"
                                            oninput="this.setCustomValidity('')" required>
                                        <span class="checkmark"></span>
                                        <a href="#" class="m-agreetext">利用規約</a><span>に同意する</span>
                                    </label>
                                </div>
                                <button class="c-btnsubmit" type="submit">確認する</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
