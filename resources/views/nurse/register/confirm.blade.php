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
    <div class="l-container l-signup">
        <header class="l-header">
            <a href="./" class="m-logo">
                <img src="../../assets/img/logo.svg" width="179" alt="CHOKOWA" class="m-logo__img">
                <span class="m-logo__text m-sp-hidden">スキマ時間にちょこっとワーク</span>
            </a>
        </header>

        <main class="l-main">
            <div class="l-content">
                <div class="sec-signupconfirm">
                    <div class="m-wrapper">
                        <h1 class="m-title"><b>新規登録</b></h1>
                        <p class="m-signuptext01">以下を確認し、「登録する」ボタンを押してください。</p>
                        <div class="sec-signupconfirm__content">
                            <form action="{{ route('nurse.register.confirm') }}" method="POST" class="m-signupconfirm__form">
                                @csrf
                                <div class="m-boxformgroup">
                                    <div class="form-group form-groupemail">
                                        <label for="email">メールアドレス</label>
                                        <input type="email" id="email1" name="email" class="m-email" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">パスワード</label>
                                        <input type="password" id="password1" name="password" class="m-password" value="{{ old('password') }}" required>
                                    </div>
                                </div>
                                <button class="c-btnsubmit" type="submit">確認する</button>
                            </form>
                            <form action="{{ route('nurse.register.return') }}" method="POST" class="m-signupconfirm__form">
                                @csrf
                                <div class="form-group form-groupemail invisible">
                                    <label for="email">メールアドレス</label>
                                    <input type="email" id="email" name="email" class="m-email" value="{{ old('email') }}" required>
                                </div>
                                <div class="form-group invisible">
                                    <label for="password">パスワード</label>
                                    <input type="password" id="password" name="password" class="m-password" value="{{ old('password') }}" required>
                                </div>
                                <button class="c-btnsubmit c-btnback bk-white" type="submit">戻る</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
