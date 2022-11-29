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
    <script src="{{ asset('assets/js/main.js') }}" defer></script>

</head>

<body>
    <header class="l-header">
        <div class="l-header__content">
            <div class="l-header__logo">
                <a href="./" class="m-logo">
                    <img src="../assets/img/logo.svg" width="179" alt="CHOKOWA" class="m-logo__img">
                    <span class="m-logo__text m-textsp">スキマ時間にちょこっとワーク</span>
                </a>
            </div>
            <nav class="l-header__glnv sec-gnav">
                <ul>
                    <li>
                        <a href="#">人材を見る</a>
                    </li>
                    <li>
                        <a href="#">求人を見る</a>
                    </li>
                    <li>
                        <a href="#">求人を出す</a>
                    </li>
                    <li>
                        <a href="#">お気に入り</a>
                    </li>
                    <li>
                        <a href="#">メッセージ</a>
                    </li>
                    <li>
                        <a href="#">通知<span class="m-notice">2</span></a>
                    </li>
                    <li><a href="#">マイページ</a></li>
                </ul>
                <a class="m-logout">ログアウト</a>
            </nav>
            <div class="sec-gnav__btn m-pc-hidden">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>

    </header>

    <section class="content">
        @yield('content')
    </section>
</body>

</html>
