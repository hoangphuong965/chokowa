<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home - ホームページ</title>
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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/signup.css') }}">

    <script src="https://kit.fontawesome.com/54f6bae288.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="l-container l-nurselogin">
        <header class="l-header">
            <div class="l-header__content">
                <div class="l-header__logo">
                    <a href="./" class="m-logo">
                        <img src="{{ asset('assets/img/logo.svg') }}" width="179" alt="CHOKOWA" class="m-logo__img">
                        <span class="m-logo__text m-sp-hidden">スキマ時間にちょこっとワーク</span>
                    </a>
                </div>
            </div>
        </header>

        <main class="l-main">
            <div class="l-content">
                <div class="m-wrapper">
                    <div class="sec-nurselogin">
                        <h1 class="m-title">
                            <span class="m-title_jp">パスワードをお忘れですか</span>
                        </h1>
                        <form action="{{ route('password.update') }}" method="POST" class="m-nurselogin__form">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="mB10 display-inlineblock">メールアドレス</label>
                                <input type="email" id="email" name="email" placeholder="メールアドレス"
                                    class="m-email cursor-none text-left @error('email') is-invalid @enderror" value="{{ old('email', request()->get('email')) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="mB10 display-inlineblock">パスワード</label>
                                <input type="password" id="password" name="password"
                                    class="m-password mB20 @error('password') is-invalid @enderror" value="{{ old('password') }}"
                                    oninvalid="this.setCustomValidity('有効なパスワードを入力してください。')"
                                    oninput="this.setCustomValidity('')" required>
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="mB10 display-inlineblock">確認用</label>
                                <input type="password" id="password_confirmation" name="password_confirmation"
                                    class="m-password_confirmation mB20 @error('password') is-invalid @enderror"
                                    oninvalid="this.setCustomValidity('有効なパスワードを入力してください。')"
                                    oninput="this.setCustomValidity('')" required>
                                <input type="hidden" name="token" value="{{ $token }}">
                            </div>
                            @if ($errors->any())
                                <ul class="m-error form-group">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>   
                            @endif
                            <button class="c-btnsubmit" type="submit">送信</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
