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

    <script src="https://kit.fontawesome.com/54f6bae288.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</head>
<body>

    <div class="l-container l-login">
        <header class="l-header">
            <a href="./" class="m-logo">
                <img src="./../assets/img/logo.svg" width="179" alt="CHOKOWA" class="m-logo__img">
                <span class="m-logo__text">スキマ時間にちょこっとワーク</span>
            </a>
            <a href="{{ route ('nurse.login.index') }}" class="m-loginnurses m-btnlogin">看護師の方はこちら</a>
        </header>
        <main class="l-main">
            <div class="m-wrapper">
                <div class="sec-login">
                    <h1 class="m-title">
                        <span class="m-title_jp">ログイン</span>
                        <span class="m-title_en">Login</span>
                    </h1>
                    <form method="POST" action="{{ route('station.login') }}" class="m-login__form">
                        @csrf
                        @if(session()->has('status'))
                                <span class="m-successpassword">{{ session('status') }}</span>
                            @endif
                        <div class="form-group">
                            <input type="email"  id="email" name="email" placeholder="メールアドレス"
                                class="m-email text-left @error('email') is-invalid @enderror" 
                                oninvalid="this.setCustomValidity('有効なメールアドレスを入力してください。')"
                                oninput="this.setCustomValidity('')" required>
                            <input type="password" id="password" name="password" placeholder="パスワード"
                                class="m-password text-left @error('password') is-invalid @enderror" 
                                oninvalid="this.setCustomValidity('有効なパスワードを入力してください。')"
                                oninput="this.setCustomValidity('')" required>
                            <div class="form-group form-groupagree form-checkbox">
                                <label for="remember">
                                    <input type="checkbox" id="remember" name="remember" class="m-agree m-forgorpass">
                                    <span class="checkmark"></span>
                                    <span class="forgot-pass m-colorblue">ログイン状態を保存する</span>
                                </label>
                            </div>
                            @if ($errors->any())
                                <ul class="m-error form-group">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="m-boxpass">
                            <a href="{{ route ('password.request') }}" class="m-forgetpassword">パスワードを忘れた場合</a>
                        </div>
                        <button class="c-btnsubmit mB40" type="submit">ログイン</button>
                    </form>
            </div>
        </main>

        <footer class="l-footer">
            <div class="m-wrapper">
                <span class="m-footer__text">Copyright © CONE-Xi All Rights Reserved.</span>
                <ul class="m-footer__menu">
                    <li>
                        <a href="#">利用規約</a>
                    </li>
                    <li>
                        <a href="#">プライバシーポリシー</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>
