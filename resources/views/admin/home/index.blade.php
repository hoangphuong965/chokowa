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

    <script src="https://kit.fontawesome.com/54f6bae288.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="l-container l-businesses">
        <header class="l-header">
            <a href="./" class="m-logo">
                <img src="{{asset('assets/img/logo.svg')}}" width="179" alt="CHOKOWA" class="m-logo__img">
                <span class="m-logo__text m-sp-hidden">スキマ時間にちょこっとワーク</span>
            </a>

        </header>

        <main class="l-main">
            <div class="l-content">
                <div class="m-wrapper">
                    <div>
                        <form action="{{ route('admin.logout') }}" method="POST">
                            @csrf
                            <p class="m-textlogout">This is admin home page.</p>
                            <button type="submit" class="m-btn01">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <footer class="l-footer">
            <div class="m-wrapper">
                <span class="m-footer__text">Copyright © CONE-Xi All Rights Reserved.</span>
            </div>
        </footer>
    </div>
</body>

</html>
